<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Http\Middleware\EncryptCookies;
use Cookie;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //Default Auth Location: vendor/laravel/framework/src/Illuminate/Auth/Notifications

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        //Validate the form data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //Attempt to log the use in
        // 'status' => 'active'
        if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            if(Auth::guard('web')->user()->status == 'active'){
                if($request->remember){
                    Cookie::queue('login_email',$request->email , 365*60*24);
                    Cookie::queue('login_password',$request->password , 365*60*24);
                }

                // === Create entry in Activity log ===
                $name = Auth::guard('web')->user()->name;
                $msg = 'User "'.$name.'" logged in';
                    $record = array(
                    'logmsg' => $msg, 
                    'created_by' => Auth::guard('web')->user()->id,
                    'created_at' => date("Y-m-d H:i:s"), 
                    'updated_at' => date("Y-m-d H:i:s"),
                );
                $rs = DB::table('activity_logs')->insert($record);

                Session::put('isLoggedIn', '1');
                return redirect()->to('/dashboard');
            }
            else{
                Auth::logout();
                \Session::flash('error', 'Inactive Account!');
                return redirect()->back();
            }

            //If successful, then redirect to thier intended location
            /*if(Auth::guard('admin')->user()->user_type == 1){
                return redirect()->intended(route('admin.dashboard'));
            }
            else if(Auth::guard('admin')->user()->user_type == 2){
                return redirect()->intended(route('subadmin.dashboard'));
            }*/
        }
        else{
            \Session::flash('error', 'Invalid Login Details!');
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
    }
}
