<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $productos = DB::table('productos')->get();
        return view('shop.shopLanding',['productos' => $productos]);
    }

    public function getProducto(Request $request){

        $id = request('id');
        $producto = DB::table('productos')->where('id',$id)->first();
        return view('shop.productDetail',['producto' => $producto]);
    }
}
