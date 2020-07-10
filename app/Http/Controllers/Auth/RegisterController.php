<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Profile;
use App\Industry;
use App\JobCategory;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'education' => ['required', 'string', 'max:100'],
            'working_years' => ['required', 'numeric', 'max:60'],
            'employee' => ['required', 'string', 'max:100'],
            'industry_id' => ['required', 'string'],
            'job_category_id' => ['required', 'string'],
            'career_change' => ['required', 'numeric'],
            'marriage_status' => ['required', 'numeric'],
            'child_status' => ['required', 'numeric'],
            'agree' => ['required', 'numeric'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'agree' => $data['agree'],
            // 'email_auth_number' => $data['email_auth_number'],
            // 'email_auth_valid_datetime' => $data['email_auth_valid_datetime'],
            // 'valid_datetime' => $data['valid_datetime'],
            // 'card_number' => $data['card_number'],
            // 'stripe_token' => $data['stripe_token'],
        ]);
        
        $user->profile()->create([
            'education' => $data['education'],
            'working_years' => $data['working_years'],
            'employee' => $data['employee'],
            'industry_id' => $data['industry_id'],
            'job_category_id' => $data['job_category_id'],
            'expat' => $data['expat'],
            'mba' => $data['mba'],
            'other_study_abroad' => $data['other_study_abroad'],
            'returnee' => $data['returnee'],
            'career_change' => $data['career_change'],
            'marriage_status' => $data['marriage_status'],
            'child_status' => $data['child_status'],
        ]);
        
        return $user;
    }
    
    
    public function showRegistrationForm()
    {   
       $industries = Industry::all()->pluck('name', 'id');
       $job_categories = JobCategory::all()->pluck('name', 'id');

        return view('auth.register', ['industries' => $industries, 'job_categories' => $job_categories]);
    }        
    
}
