<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

       Fortify::loginView(function() {
           return view('auth.Login');
       });

       Fortify::registerView(function() {
        return view('auth.Register');
        });

        Fortify::authenticateUsing(function (Request $request) {
        $user = Usuarios::where('username', $request->username)->first();

        $userSession = DB::table('usuarios')
        ->join('iconos', 'usuarios.iconousado', '=', 'iconos.id')
        ->join('banners', 'usuarios.bannerusado', '=', 'banners.id')
        ->select('usuarios.*', 'iconos.iconImage','banners.bannerImage')
        ->where('usuarios.username',$request->username)
        ->first();
        
        Session::put('user', $userSession);
        
        if ($user &&
            Hash::check($request->password, $user->password)) {
            return $user;
        }
    });
    }

}

