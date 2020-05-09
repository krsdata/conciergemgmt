<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helper\CommonFunction;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function signup(Request $request){
        return view('auth.signup');
    }

    public function signupSubmit(Request $request){

        if($request->isMethod('post'))
        {
            // echo "<pre>"; print_r($request->all()); exit;    
            extract($_POST);
            if($name != '' && $email != '' && $phone != '' && $password != '')
            {   
                //First check email should be unique
                $exist = DB::table('users')
                    ->where('email', '=', $email)
                    ->where('is_deleted', '=', '0')
                    ->select('id')
                    ->get();

                //Redirect back
                if(count($exist))
                { 
                    \Session::flash('error', 'Email is already registered!');
                    return redirect()->back();
                }
                else { 
                    $record = array(
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'status' => 'inactive',
                        'password' => Hash::make($password),
                        'role_id' => 2,
                        'created_at' => date("Y-m-d H:i:s"), 
                        'updated_at' => date("Y-m-d H:i:s"),
                    );
                    
                    $rs = DB::table('users')->insert($record);
                    $user_id = DB::getPdo()->lastInsertId();
                    if($user_id) 
                    {
                        // === Create entry in Activity log ===
                        $msg = 'New user "'.$name.'" registered';
                        $record = array(
                            'logmsg' => $msg, 
                            'created_by' => $user_id,
                            'created_at' => date("Y-m-d H:i:s"), 
                            'updated_at' => date("Y-m-d H:i:s"),
                        );
                        $rs = DB::table('activity_logs')->insert($record);

                        \Session::flash('success', 'Signup Successful! You can login after Admin approval.');
                        return redirect()->back();
                    }
                
                }
            } 
            else{
                \Session::flash('error', 'All fields are required!');
                return redirect()->back();
            }
        }
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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
