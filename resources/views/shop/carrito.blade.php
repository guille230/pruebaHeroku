<style>
    .dropdown-menu.show {
      top: 0% !important;
  }
  
  .dropdown-menu{
      min-width: 0rem !important;
      position: absolute !important;
  }
  .dropdown-menu[data-bs-popper] {
      left: 50% !important;
  }
  </style>
  
  @php
   $cart = session('carrito');
  @endphp
  
  <div class="dropdown-thin">
    
    <a id="dropdownMenuButton1" class="carrito" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fas fa-shopping-cart carritoIcon hvr-grow"></i>
    </a>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        @if (session()->has('carrito'))
        @foreach ($cart as $prod)
        <li>
          <div class="productoCart dropdown-item">
            <img src="{{$prod->image}}" alt="img" height="10" width="10" style="border-right: 2px black solid">
            {{-- @php
              $x = array_count_values($cart, $prod->id);
            @endphp --}}
            <span>{{$prod->nombre}}</span>
            {{-- @php
              array_diff($prod, array($prod->id));
            @endphp --}}
          </div>
        </li>
        @endforeach
        @else
          <p class="dropdown-item" style="padding: 10px">Añade Productos al carrito</p>
        @endif
</div>