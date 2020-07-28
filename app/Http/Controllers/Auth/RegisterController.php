<?php

namespace App\Http\Controllers\Auth;

use App\Mail\EmailVerification;
use App\User;
use App\Profile;
use App\Industry;
use App\JobCategory;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    public function pre_check(Request $request){
        $this->validator($request->all())->validate();
        //flash data
        $request->flashOnly('email');

        $bridge_request = $request->all();
        // password マスキング
        $bridge_request['password_mask'] = '******';

        return view('auth.register_check')->with($bridge_request);
    }
    
    protected function create(array $data)
    {
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'email_verify_token' => str_random(32) //base64_encode($data['email']),
        ]);
            // 'email_auth_number' => $data['email_auth_number'],
            // 'email_auth_valid_datetime' => $data['email_auth_valid_datetime'],
            // 'valid_datetime' => $data['valid_datetime'],
            // 'card_number' => $data['card_number'],
            // 'stripe_token' => $data['stripe_token'],
        
        $email = new EmailVerification($user);
        Mail::to($user->email)->send($email);
        
        return $user;
    }
    
    public function register(Request $request)
    {
        event(new Registered($user = $this->create( $request->all() )));
        
        return view('auth.registered');
    }
    
    public function showForm($email_verify_token)
    {
        // 使用可能なトークンか
        if ( !User::where('email_verify_token',$email_verify_token)->exists() )
        {
            return view('auth.main.register')->with('message', '無効なトークンです。');
        } else {
            $user = User::where('email_verify_token', $email_verify_token)->first();
            // 本登録済みユーザーか
            if ($user->status == config('const.USER_STATUS.REGISTER')) //REGISTER=1
            {
                logger("status". $user->status );
                return view('auth.main.register')->with('message', 'すでに本登録されています。ログインして利用してください。');
            }
            // ユーザーステータス更新
            $user->status = config('const.USER_STATUS.MAIL_AUTHED');
            // $user->email_verified_at = Carbon::now();
            if($user->save()) {
                
                $industries = Industry::all()->pluck('name', 'id');
                $job_categories = JobCategory::all()->pluck('name', 'id');
                
                return view('auth.main.register', ['industries' => $industries, 'job_categories' => $job_categories, 'email_verify_token'=>$email_verify_token]);
            } else{
                return view('auth.main.register')->with('message', 'メール認証に失敗しました。再度、メールからリンクをクリックしてください。');
            }
        }
    }
    
    public function mainCheck(Request $request)
    {   
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'education' => ['required', 'string', 'max:255'],
            'working_years'=> ['required', 'numeric', 'max:60'],
            'employee'=> ['required', 'string', 'max:255'],
            'industry_id'=> ['required', 'string'],
            'job_category_id'=> ['required', 'string'],
            'expat'=> ['required', 'numeric'],
            'mba'=> ['required', 'numeric'],
            'other_study_abroad'=> ['required', 'numeric'],
            'returnee'=> ['required', 'numeric'],
            'career_change'=> ['required', 'numeric'],
            'marriage_status'=> ['required', 'numeric'],
            'child_status'=> ['required', 'numeric'],
            'agree' => ['required', 'numeric'],
        ]);
        
        //データ保持
        $email_verify_token = $request->email_verify_token;
      
        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;
        $user->name = $request->name;
        $user->agree = $request->agree;
        
        $profile = new Profile();
        $profile->education = $request->education;
        $profile->working_years = $request->working_years;
        $profile->employee = $request->employee;
        $profile->industry_id = $request->industry_id;
        $profile->job_category_id= $request->job_category_id;
        $profile->expat = $request->expat;
        $profile->mba = $request->mba;
        $profile->other_study_abroad = $request->other_study_abroad;
        $profile->returnee = $request->returnee;
        $profile->career_change = $request->career_change;
        $profile->marriage_status = $request->marriage_status;
        $profile->child_status = $request->child_status;
        $profile->can_mentor = $request -> can_mentor;
        $profile->intro = $request->intro;
        
        $industry = Industry::find($request->industry_id)->name;
        $job_category = JobCategory::find($request->job_category_id)->name;
        
        return view('auth.main.register_check', [
            'user'=>$user, 
            'profile'=>$profile, 
            'industry'=>$industry, 
            'job_category'=>$job_category,
            'email_verify_token'=>$email_verify_token,
        ]);
    }
    
        public function mainRegister(Request $request)
      {
        $user = User::where('email_verify_token', $request->email_verify_token)->firstOrFail();
        $user->status = config('const.USER_STATUS.REGISTER');
        $user->name = $request->name;
        $user->agree = $request->agree;
        $user->save();
        
        $profile = new Profile();
        $profile->user_id=$user->id;
        $profile->education = $request->education;
        $profile->working_years = $request->working_years;
        $profile->employee = $request->employee;
        $profile->industry_id = $request->industry_id;
        $profile->job_category_id= $request->job_category_id;
        $profile->expat = $request->expat;
        $profile->mba = $request->mba;
        $profile->other_study_abroad = $request->other_study_abroad;
        $profile->returnee = $request->returnee;
        $profile->career_change = $request->career_change;
        $profile->marriage_status = $request->marriage_status;
        $profile->child_status = $request->child_status;
        $profile->can_mentor = $request -> can_mentor;
        $profile->intro = $request->intro;
        $profile->save();
        
        \Auth::login($user);
        
        return view('auth.main.registered');
      }
}
