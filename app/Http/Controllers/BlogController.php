<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $entradas = DB::table('blogs')->get();
        return view('blog.blogLanding',['entradas' => $entradas]);
    }


    public function getEntrada(){
        $id = request('id');
        $entrada = DB::table('blogs')->where('id',$id)->first();
        return view('blog.entrada',['entrada' => $entrada]);
    }

    public function ajaxRequest(Request $request)
    {
        $cat = $request->cat;
        $entrada = DB::table('blogs')->where('name','LIKE','%'.$cat.'%')->get();
        $response['data'] = $entrada;
        return response()->json($response);
    }    
}
