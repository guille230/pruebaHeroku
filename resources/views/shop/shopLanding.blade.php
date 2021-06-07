@include('header')
 <div class="container">
  @include('sidebar')
  @include('shop.carrito')
    <div class="row d-flex text-center">   
            @foreach ($productos as $articulo)
            <div class="col-4 my-3 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$articulo->image}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$articulo->name}}</h5>
                  <p class="card-text">{{$articulo->description}}</p>
                  <h4 class="card-text">{{$articulo->cost}}€</h4>
                  <form action="{{route('productDetail')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$articulo->id}}">
                    <input class="btn btn-primary" type="submit" value="Comprar"> 
                  </form>
                </div>
              </div>
            </div>
            @endforeach
    </div>
</div>

@include('footer')