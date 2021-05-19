<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Usuarios;
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
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'type' => ['required','integer'],
            'address' => ['required', 'string', 'max:255'],
            'cp' => ['required', 'integer'],
            'age' => ['required', 'integer', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'icon' => ['required', 'string', 'max:255'],
            'banner' => ['required', 'string', 'max:255'],
            'iconousado' => ['required', 'integer', 'max:255'],
            'bannerusado' => ['required', 'integer', 'max:255'],
            'bio' => ['required', 'string', 'max:500'],
            'games' => ['required', 'string', 'max:255'],
            'preferences' => ['required', 'string', 'max:255']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Usuarios
     */
    protected function create(array $data)
    {
        return Usuarios::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => $data['type'],
            'address' => $data['address'],
            'cp' => $data['cp'],
            'age' => $data['age'],
            'location' => $data['location'],
            'country' => $data['country'],
            'icon' =>$data['icon'],
            'banner' => $data['banner'],
            'iconousado' => $data['iconousado'],
            'bannerusado' => $data['bannerusado'],
            'bio' => $data['bio'],
            'games' => $data['games'],
            'preferences' => $data['preferences'],
        ]);
    }
}
