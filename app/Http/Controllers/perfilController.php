<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perfilController extends Controller
{
    public function index(){
        $us = session('user');
        return view('perfil',compact($us));
    }

    public function setBio(Request $request){

    }

    public function changeIcon(Request $request){

    }

    public function changeBanner(Request $request){

    }
}
