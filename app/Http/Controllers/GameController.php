<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $partidas = DB::table('partidas')->get();
        return view('Games.GameList',['partidas' => $partidas]);
    }

    public function getPartida(Request $request){

        $id = request('id');
        $partida = DB::table('partidas')->where('id',$id)->first();
        
        $usuarios = DB::table('usuarios')->where('id',$id)->first();

        $usupa = DB::table('usuarios_partidas')->where('id_usuarios',$id)->first();

        return view('Games.gamesDetail',['partidas' => $partida,'usuarios'=>$usuarios,'usuarios_partidas'=>$usupa]);
        
    }
}
