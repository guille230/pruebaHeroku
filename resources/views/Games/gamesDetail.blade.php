@include('header')

<div class="container my-4 border border-dark">
    <div class="row border border-dark">
        <div class="col-12 text-center py-2"> 
        <h1>~ {{$partidas->nombre}} ~</h1>
        </div>
            <div class="rounded discord">
                <a href="https://discord.gg/X5SfqxZqur" target="_blank" class="hvr-grow d-flex disLink"><i class="fab fa-discord disIcon"></i></a>
            </div>
    </div>
    <div class="row border border-dark">
        <div class="col-12 text-center py-2"> 
        <h3>Creador:  {{$usuarios->username}}</h3>
        </div>
    </div>
    <div class="row border border-dark">
        <div class="col-6 text-center py-2 border-end border-dark"> 
        <h3>Sistema: <img class="sistema" src="{{asset('img/'.$partidas->system.'.png')}}" alt="Card image cap"></h3>
        </div>
        <div class="col-6 text-center py-2"> 
            <?php
                $tipo;
                switch ($partidas->type) {
                case 0:
                $tipo = "Campaña";
                break;
                case 1:
                $tipo = "OneShot";
                break;
                case 3:
                $tipo = "Iniciacion";
                break;
                }
            ?>
            <h3>Tipo de partida: <?php echo $tipo;?> </h3>
            </div>
    </div>
    <div class="row border border-dark">
        <div class="col-12 text-center py-2"> 
        <h3>Duracion: {{$partidas->duration}} sesiones</h3>
        </div>
    </div>
    <div class="row border border-dark  ">
        <div class="col-12 text-center py-2"> 
        <h3>Descripcion:</h3>
        <h5>"{{$partidas->description}}"</h5>
        </div>
    </div>
</div>

@include('footer')