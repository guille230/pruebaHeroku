<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\PedidosProductos;
use App\Models\Productos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Barryvdh\Debugbar\Facade as Debugbar;

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
        if(Session::has('carrito')){
            Session::push('carrito', [
                'id_producto' => $id,
                'cantidad' => 1
            ]);
            $array = session('carrito');
            $productos = array();
               
                foreach($array as $key => $value){
                    $idProd = $value['id_producto'];

                    $cant = $value['cantidad'];

                    if(!isset($productos[$idProd])){
                        $productos[$idProd] = 0;
                    }

                    $productos[$idProd] += $cant;
                }

                $items = array();
                foreach($productos as $id_producto => $cantidad) {
                    $items[] = array(
                        'id_producto' => $id_producto,
                        'cantidad' => $cantidad
                    );
                  }

                Session::put('carrito', $items);
        } else{
            Session::put('carrito', [
                0 => [
                    'id_producto' => $id,
                    'cantidad' => 1
                ]
            ]);
        }
        $data = session('carrito');
        //$productos = Productos::lists('nombre_producto', 'id');
        $productos = DB::table('productos')->get();
        return view('shop.shopLanding')->with(['carrito', $data,'productos' => $productos]);
    }

    public function purchase(Request $request){
        $arr = request('productos');
        $prod = unserialize(base64_decode($arr));
        $us = session('user');

       $pedido = Pedidos::create([
            'address' => $us->address,
            'cost' => 2,
            'user' => $us->id
        ]);

        foreach($prod as $producto){
            PedidosProductos::create([
                'id_pedidos' => $pedido->id,
                'id_productos' => $producto['id_producto']
            ]);
        }

        Session::forget('carrito');
        if(!Session::has('key')){
            return view('shop.compra');
        }
    }
}
