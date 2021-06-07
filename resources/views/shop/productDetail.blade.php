@include('header')

    <div class="container" style="margin: 0 auto; background-color: wheat">
        @include('shop.carrito')
        <div class="row d-flex flex-row">
            <div class="col-12 col-md-5 align-content-center justify-center text-center my-5">
                <div class="imageProductoContainer">
                    <img src="{{$producto->image}}" alt="a" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-md-6 my-5">
                <h2 class="productTitle">{{$producto->name}}</h2>
                <h4>{{$producto->cost}}</h4>
                <p class="productoDescription">{{$producto->description}}</p>
                <p class="dealer">{{$producto->dealer}}</p>
                <form action="{{route('añadirCarrito')}}" method="POST">
                    @csrf
                    <input type="hidden" name="idProducto" value="{{$producto->id}}">
                    <button class="btn btn-secondary purchase">Comprar</button>
                </form>
        </div>
        </div>
        
    </div>
@include('footer')