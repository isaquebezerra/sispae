<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\PersonalData;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'password' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $input =[
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'campus_id' => $data['campus_id'],
        ];

        $role = Role::find(3);
        $user = User::create($input);
        $user->attachRole($role);
        $userId = $user->id;

        $input =[
            'course' => $data['course'],
            'register' => $data['register'],
            'class' => $data['class'],
        ];

        $personaldata = PersonalData::create($input);
        $personaldata->user_id = $userId;
        $personaldata->save();
        return $user;
    }
}
