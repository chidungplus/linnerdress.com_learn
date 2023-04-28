<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Role;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

use App\Http\Controllers\Frontend\UserLogController;
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
    protected $redirectTo = '/';

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
     * Ghi đè RegistersUsers
     */
    public function showRegistrationForm()
    {
        // return view('auth.register');
        return view('auth.register');
    }
    /**
     * Ghi đè RegistersUsers
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        # set remember token
        $user->setRememberToken(Str::random(60));
        $user->save();

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
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
            // 'name' => ['required', 'string', 'max:255'],
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
       $user = User::create([
           'name'     => 'No Name '. rand(1111,9999),
           'email'    => $data['email'],
           'password' => bcrypt($data['password']),
       ]);

       $userLogController = new UserLogController;

    //    $dataLog = array();
    //    $dataLog['user_id'] = $user->id;
    //    $dataLog['action'] = 'user_register';
    //    $dataLog['model'] = 'user';

    //    $userLogController->create($dataLog);

       return $user;
    }
}
