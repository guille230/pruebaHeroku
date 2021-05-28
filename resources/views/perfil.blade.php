@include('header')
<div class="container-fluid">
<div class="row">
<img src="{{$user->bannerImage}}" alt="Banner" width="100%" height="100%">
</div>
<div class="row mt-4 mb-4">
    <div class="col-4 d-flex justify-content-center">
        <img class="ImagenPerfil"src="{{$user->iconImage}}" alt="Icon">
    </div>
    <div class="col-4">
        <div class="container">
            <div class="row">
                <div class="col 12 d-flex justify-content-center">
                    <span class="textoPerfil">Nombre: {{$user->username}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col 12 d-flex justify-content-center">
                    <span class="textoPerfil">Tipo: {{$user->type}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="container">
            <div class="row">
                <div class="col 12 d-flex justify-content-center">
                    <span class="textoPerfil">Sistema Favorito: {{$user->preferences}}</span>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row border-top border-dark">
        <div class="col-4 d-flex justify-content-center border-end border-dark">
            <span class="textoPerfil">Partidas:</span>
        </div>
        <div class="col-8 d-flex justify-content-center">
            <span class="textoPerfil">Biografia:</span>
        </div>
    </div>
    <div class="row">
        <div class="col-4 d-flex justify-content-center border-end border-dark">
            @foreach ($partidas as $partida )
            <span class="textoPerfil  w-70" style="font-size: 1.5rem; font-weight:600; ">{{$partida->nombre}}</span> 
            @endforeach
            
        </div>
        <div class="col-8 d-flex justify-content-center">
            <span class="textoPerfil">{{$user->bio}}</span>
        </div>
    </div>
</div>

@include('footer');