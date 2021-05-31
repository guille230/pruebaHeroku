@include('header')

   <!-- Sidebar -->
<div id="wrapper">
 <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
      <div class="sidebar-header">
      <div class="sidebar-brand">FireRoll</div></div>
      <li class="Manual">
      <form action="{{route('filtro')}}" id="filtrosTienda" method="POST">
        @csrf
          <input type="hidden" name="filtro" value="manuales">
            <a href="javascript:{}" onclick="document.getElementById('filtrosTienda').submit(); return false;">Manuales<span class="caret"></span></a>
        </li>
        </form>
        <li class="Figuras">
        <form action="{{route('filtro')}}" id="filtrosTienda2" method="POST">
          @csrf
            <input type="hidden" name="filtro" value="figuras">
              <a href="javascript:{}" onclick="document.getElementById('filtrosTienda2').submit(); return false;">Figuras<span class="caret"></span></a>
          </li>
          </form>
          <li class="Dados">
          <form action="{{route('filtro')}}" id="filtrosTienda3" method="POST">
            @csrf
              <input type="hidden" name="filtro" value="dados">
                <a href="javascript:{}" onclick="document.getElementById('filtrosTienda3').submit(); return false;">Dados<span class="caret"></span></a>
            </li>
            </form>
            <li class="Mapas">
            <form action="{{route('filtro')}}" id="filtrosTienda4" method="POST">
              @csrf
                <input type="hidden" name="filtro" value="mapas">
                  <a href="javascript:{}" onclick="document.getElementById('filtrosTienda4').submit(); return false;">Mapas<span class="caret"></span></a>
              </li>
              </form>
    </ul>
 </nav>

 <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
    <span class="hamb-top"></span>
    <span class="hamb-middle"></span>
    <span class="hamb-bottom"></span>
</button>

 <div class="container">

    
    <div class="row d-flex justify-content-center text-center align-content-center mx-0">
        
            @foreach ($productos as $articulo)
            <div class="col-12">
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

@include('footer');

</div>

<script>
    $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>