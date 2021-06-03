<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Search;

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

    public function filtradoPartidas(Request $request){

        
        $type = $request->type;
        $system = $request->system;
        $order = $request->order;

        $query = DB::table('partidas');
        if ($type != "x") $query->where("type",$type);
        if ($system != "x") $query->where("system",$system);
        //$query->orderBy('creationdate', $order);
        $partidas = $query->get();

        return view('Games.GameList',['partidas' => $partidas]);

        
    }
}
