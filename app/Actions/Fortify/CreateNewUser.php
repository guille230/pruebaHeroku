<?php

namespace App\Actions\Fortify;

use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\Usuarios
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => $this->passwordRules(),
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
            'bio' => ['string', 'max:500'],
            'games' => ['string', 'max:255'],
            'preferences' => ['required', 'string', 'max:255']
        ])->validate();

        $userCreated = Usuarios::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'type' => $input['type'],
            'address' => $input['address'],
            'cp' => $input['cp'],
            'age' => $input['age'],
            'location' => $input['location'],
            'country' => $input['country'],
            'icon' => $input['icon'],
            'banner' => $input['banner'],
            'iconousado' => $input['iconousado'],
            'bannerusado' => $input['bannerusado'],
            'bio' => $input['bio'],
            'games' => $input['games'],
            'preferences' => $input['preferences'],
        ]);

        $userSession = DB::table('usuarios')
        ->join('iconos', 'usuarios.iconousado', '=', 'iconos.id')
        ->join('banners', 'usuarios.bannerusado', '=', 'banners.id')
        ->select('usuarios.*', 'iconos.iconImage','banners.bannerImage')
        ->where('usuarios.username',$input['username'])
        ->first();

        Session::put('user', $userSession);

        return $userCreated;

        
        
        
    }
}
