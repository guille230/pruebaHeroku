@include('header')
 <div class="container">
  @include('sidebar')
  @if (session()->has('user'))
    @include('shop.carrito')
  @endif
    <div class="row d-flex text-center">   
            @foreach ($productos as $articulo)
            <div class="col-4 my-3 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$articulo->image}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$articulo->name}}</h5>
                  <p class="card-text">{{$articulo->description}}</p>
                  <h4 class="card-text">{{$articulo->cost}}€</h4>
                  @if ($articulo->stock > 0)
                  <form action="{{route('productDetail')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$articulo->id}}">
                    <input class="btn btn-primary" type="submit" value="Comprar"> 
                  </form>
                  @else
                  <h1 class="px-2 py-2 my-2 fs-3 inline-flex leading-6 font-semibold rounded-full bg-red-100 text-red-800">AGOTADO</h1>
                  @endif
                </div>
              </div>
            </div>
            @endforeach
    </div>
</div>
@include('footer')