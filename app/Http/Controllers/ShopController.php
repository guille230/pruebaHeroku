<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function filtrado(Request $request){
        $filtro =$request->filtro;

        $producto = DB::table('productos')->where('tags', $filtro)->get();

        return view('shop.shopLanding',['productos' => $producto]);
    }

    public function añadirCarrito(Request $request){
        $id = request('idProducto');
        $producto = DB::table('productos')->where('id',$id)->first();
        Session::put('carrito', $producto);
        $productos = DB::table('productos')->get();
        return view('shop.shopLanding')->with(['productos'=>$productos]);
    }
}
