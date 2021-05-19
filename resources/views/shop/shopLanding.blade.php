@include('header')

   <!-- Sidebar -->
<div id="wrapper">
 <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
      <div class="sidebar-header">
      <div class="sidebar-brand">
        <a href="#">FireRoll</a></div></div>
        <li class="dropdownManual">
            <a href="" class="dropdown-toggle"  data-toggle="dropdownManual">Manuales <span class="caret"></span></a>
          <ul class="dropdown-menu animated fadeInLeft" role="menu">
           <div class="dropdown-header">Sistemas</div>
           <li><input type="checkbox"> D&D</li>
           <li><input type="checkbox"> PathFinder</li>
           <li><input type="checkbox"> Anima</li>
           </ul>
           </li>
           <li class="dropdownFiguras">
            <a href="" class="dropdown-toggle"  data-toggle="dropdownFiguras">Figuras <span class="caret"></span></a>
          <ul class="dropdown-menu animated fadeInLeft" role="menu">
           <div class="dropdown-header">Razas</div>
           <li><input type="checkbox"> Humanos</li>
           <li><input type="checkbox"> Orcos</li>
           <li><input type="checkbox"> Bestias</li>
           </ul>
           </li>
           <li class="dropdownIconos">
            <a href="" class="dropdown-toggle"  data-toggle="dropdowniconos">Iconos <span class="caret"></span></a>
          <ul class="dropdown-menu animated fadeInLeft" role="menu">
           <div class="dropdown-header">iconos</div>
           <li><input type="checkbox"> Evento</li>
           <li><input type="checkbox"> Premium</li>
           <li><input type="checkbox"> Raros</li>
           </ul>
           </li>
           <li class="dropdownBanners">
            <a href="" class="dropdown-toggle"  data-toggle="dropdownBanners">Banners <span class="caret"></span></a>
          <ul class="dropdown-menu animated fadeInLeft" role="menu">
           <div class="dropdown-header">Banners</div>
           <li><input type="checkbox"> Evento</li>
           <li><input type="checkbox"> Premium</li>
           <li><input type="checkbox"> Raros</li>
           </ul>
           </li>
      <li class="dropdown">
      <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Works <span class="caret"></span></a>
    <ul class="dropdown-menu animated fadeInLeft" role="menu">
     <div class="dropdown-header">Dropdown heading</div>
     <li><a href="#pictures">Pictures</a></li>
     <li><a href="#videos">Videeos</a></li>
     <li><a href="#books">Books</a></li>
     <li><a href="#art">Art</a></li>
     <li><a href="#awards">Awards</a></li>
     </ul>
     </li>
     <li><a href="#services">Services</a></li>
     <li><a href="#contact">Contact</a></li>
     <li><a href="#followme">Follow me</a></li>
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
                  <h4 class="card-text">{{$articulo->cost}}</h4>
                  <form action="{{route('productDetail')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$articulo->id}}">
                    <input type="submit" value="Comprar">
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