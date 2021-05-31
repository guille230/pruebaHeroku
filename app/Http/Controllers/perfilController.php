<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class perfilController extends Controller
{
    public function index(){

        $us = session('user');

        $partidasUsuario = DB::table('usuarios_partidas')
        ->join('partidas', 'usuarios_partidas.id_partidas', '=', 'partidas.id')
        ->select('usuarios_partidas.*', 'partidas.*')
        ->where('usuarios_partidas.id_usuarios',$us->id)
        ->get();

        $iconos = DB::table('iconos')->get();
        $banners = DB::table('banners')->get();


        return view('perfil')->with(['user'=>$us, 'partidas'=> $partidasUsuario,'iconos' => $iconos,'banners'=> $banners]);
    }

    public function setBio(Request $request){
        $id = request('id');
        $bio = request('bio');
        $user = Usuarios::find($id);
        $user->bio = $bio;
        $user->save();

        $us = DB::table('usuarios')
        ->join('iconos', 'usuarios.iconousado', '=', 'iconos.id')
        ->join('banners', 'usuarios.bannerusado', '=', 'banners.id')
        ->select('usuarios.*', 'iconos.iconImage','banners.bannerImage')
        ->where('usuarios.id',$id)
        ->first();
        Session::put('user', $us);

        $partidasUsuario = DB::table('usuarios_partidas')
        ->join('partidas', 'usuarios_partidas.id_partidas', '=', 'partidas.id')
        ->select('usuarios_partidas.*', 'partidas.*')
        ->where('usuarios_partidas.id_usuarios',$id)
        ->get();

        $iconos = DB::table('iconos')->get();
        $banners = DB::table('banners')->get();


        return view('perfil')->with(['user'=>$us, 'partidas'=> $partidasUsuario,'iconos' => $iconos,'banners'=> $banners]);
    }

    public function changeIcon(Request $request){
        $id = request('id');
        $icono = request('icono');
        $user = Usuarios::find($id);
        $user->iconousado = $icono;
        $user->save();

        $us = DB::table('usuarios')
        ->join('iconos', 'usuarios.iconousado', '=', 'iconos.id')
        ->join('banners', 'usuarios.bannerusado', '=', 'banners.id')
        ->select('usuarios.*', 'iconos.iconImage','banners.bannerImage')
        ->where('usuarios.id',$id)
        ->first();
        Session::put('user', $us);

        $partidasUsuario = DB::table('usuarios_partidas')
        ->join('partidas', 'usuarios_partidas.id_partidas', '=', 'partidas.id')
        ->select('usuarios_partidas.*', 'partidas.*')
        ->where('usuarios_partidas.id_usuarios',$id)
        ->get();

        $iconos = DB::table('iconos')->get();
        $banners = DB::table('banners')->get();


        return view('perfil')->with(['user'=>$us, 'partidas'=> $partidasUsuario,'iconos' => $iconos,'banners'=>$banners]);

    }

    public function changeBanner(Request $request){
        $id = request('id');
        $banner = request('banner');
        $user = Usuarios::find($id);
        $user->bannerusado = $banner;
        $user->save();

        $us = DB::table('usuarios')
        ->join('iconos', 'usuarios.iconousado', '=', 'iconos.id')
        ->join('banners', 'usuarios.bannerusado', '=', 'banners.id')
        ->select('usuarios.*', 'iconos.iconImage','banners.bannerImage')
        ->where('usuarios.id',$id)
        ->first();
        Session::put('user', $us);

        $partidasUsuario = DB::table('usuarios_partidas')
        ->join('partidas', 'usuarios_partidas.id_partidas', '=', 'partidas.id')
        ->select('usuarios_partidas.*', 'partidas.*')
        ->where('usuarios_partidas.id_usuarios',$id)
        ->get();

        $iconos = DB::table('iconos')->get();
        $banners = DB::table('banners')->get();


        return view('perfil')->with(['user'=>$us, 'partidas'=> $partidasUsuario,'iconos' => $iconos,'banners'=> $banners]);
    }
}
