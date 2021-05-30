@include('header')

<style>
    /* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  border: 2px solid #f00;
  border-radius: 4rem;
}
</style>
<div class="container-fluid">
<div class="row">
<img src="{{$user->bannerImage}}" alt="Banner" width="100%" height="100%">
</div>
<div class="row mt-4 mb-4">
    <div class="col-4 d-flex justify-content-center">
        <img class="ImagenPerfil"src="{{$user->iconImage}}" alt="Icon">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalIcon">
            <i class="fas fa-pencil-alt"></i>   
        </button>
    </div>
    <div class="col-4">
        <div class="container">
            <div class="row">
                <div class="col 12 d-flex justify-content-center">
                    <span class="textoPerfil"> <span class="textoTitulo">Nombre:</span> {{$user->username}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col 12 d-flex justify-content-center">
                    <span class="textoPerfil"> <span class="textoTitulo">Tipo:</span> {{$user->type}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="container">
            <div class="row">
                <div class="col 12 d-flex justify-content-center">
                    <span class="textoPerfil"><span class="textoTitulo">Sistema Favorito:</span> {{$user->preferences}}</span>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row border-top border-dark">
        <div class="col-4 d-flex justify-content-center border-end border-dark">
            <span class="textoTitulo">Partidas:</span>
        </div>
        <div class="col-8 d-flex justify-content-center">
            <span class="textoTitulo">Biografia:</span>
        </div>
    </div>
    <div class="row">
        <div class="col-4 d-flex justify-content-center border-end border-dark">
            @foreach ($partidas as $partida )
            <span class="textoPerfil  w-70">{{$partida->nombre}}</span> 
            @endforeach
            
        </div>
        <div class="col-8 d-flex justify-content-center">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="textoPerfil">{{$user->bio}}</p>
                </div>
                <div class="col-12 text-right my-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalBio">
                        Actualizar Bio    
                    </button>
                </div>
               
            </div>
            
        </div>
    </div>
</div>

<div class="modal fade" id="modalBio" tabindex="-1" aria-labelledby="Actualizar Biografia" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Biografia</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('actuBio')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$user->id}}">
                <label for="bio-text" class="col-form-label">Biografia:</label>
                <textarea class="form-control" id="bio-text" name="bio"></textarea>
                <input type="submit" value="Insertar" class="btn btn-success my-3">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </form> 
        </div>
      </div>
    </div>
  </div>

  {{-- Modal Icono --}}
  <div class="modal fade" id="modalIcon" tabindex="-1" aria-labelledby="Cambiar Icono" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Iconos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('actuIcon')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$user->id}}">
                @foreach ($iconos as $icono )
                <label class="mx-2">
                    <input type="radio" name="icono" value="{{$icono->id}}" checked>
                    <img src="{{$icono->iconImage}}" class="rounded-circle" height="80" width="80" alt="a">
                  </label>
                @endforeach
                <br><br>
                <input type="submit" value="Insertar" class="btn btn-success my-3">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </form> 
        </div>
      </div>
    </div>
  </div>

@include('footer');

<script>
    //Modal Bio
    var ModalBIo = document.getElementById('modalBio')
    var newBio = document.getElementById('newBio')

    myModal.addEventListener('shown.bs.modal', function () {
        newBio.focus()
    })
</script>