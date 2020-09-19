<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    
        /**
     * 先に本登録チェックを実施した上で、パスワードリセットを実行
     */
    public function preCheck(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules(), $this->validationErrorMessages());

        $email = $request->input('email');
        $validator->after(function ($validator) use ($email) {
            $checkResult = $this->isRegisterdEmailCheck($email);
            if ($checkResult[0] === false) {
                $validator->errors()->add('register', $checkResult[1]);
            }
        });
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ここから下は Illuminate\Foundation\Auth\ResetsPasswords の reset() と同じ処理
        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        return $response == Password::PASSWORD_RESET
                    ? $this->sendResetResponse($request, $response)
                    : $this->sendResetFailedResponse($request, $response);
    }
    
    public function redirectTo()
    {
        if(! \Auth::user()) {
            return '/';
        }
        return route('users.show', ['user' => \Auth::id()]);
    }
    
    private function isRegisterdEmailCheck($email)
    {
        $result = DB::table('users')
                ->where('email', $email)
                ->first();
        if ($result === null) {
            // 仮登録もしていない
            return array(false, 'このメールアドレスは登録されていません。');
        }
        $status = $result->status;
        if (in_array((int) $status, array(0, 2))) {
            // 仮登録のみであれば、
            return array(false, '本登録が完了しておりません。仮登録の際に送られたURLから本登録をお願いします。<br>仮登録から1時間以上経っている場合にはお手数ですがrolemy.info@gmail.comまでお問い合わせいただけますと幸いです。');
        }
        return array(true, '');
    }
}
