@include('header')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12 d-flex justify-content-center text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <span class="tituloFiltro">Filtro</span>
                    </div>
                </div>
                <div class="row">
                    <nav class="navbar navbar-light  col-12 d-flex justify-content-center">
                        <form class="form-inline mt-3">
                            <input class="mr-sm-2 buscadorCustom" type="search" placeholder="Introduce la búsqueda" aria-label="Buscar">
                            <button class="btn btn-outline-success my-2 my-sm-0 w-20" type="submit">Buscar</button>
                        </form>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-2">
                        <h3 class="text-center">Tipo</h3>
                    </div>
                    <div class="col-12 col-sm-2 d-flex align-items-center">
                        <select class="form-select w-70" aria-label="Default select example">
                            <option value="" selected>Escoja un tipo...</option>
                            <option value="Campana">Campaña</option>
                            <option value="OneShot">OneShot</option>
                            <option value="Iniciación">Iniciación</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-2">
                        <h3 class="text-center">Sistema</h3>
                    </div>
                    <div class="col-12 col-sm-2 d-flex align-items-center ">
                        <select class="form-select w-70" aria-label="Default select example">
                            <option value="" selected>Escoja un sistema...</option>
                            <option value="DnD">DnD</option>
                            <option value="Anima">Anima</option>
                            <option value="PathFinder">PathFinder</option>
                            <option value="Aquelarre">Aquelarre</option>
                            <option value="Call of Cthulhu">Call of Cthulhu</option>
                            <option value="BurnBryte">BurnBryte</option>
                            <option value="Fate">Fate</option>
                            <option value="Aquelarre">Aquelarre</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-2">
                        <h3 class="text-center">Ordenar por</h3>
                    </div>
                    <div class="col-12 col-sm-2 d-flex align-items-center ">
                        <select class="form-select w-70" aria-label="Default select example">
                            <option value="reciente" selected>Mas reciente</option>
                            <option value="antigua">Mas antigua</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="mt-5"></div>
    @foreach ($partidas as $salas)
    <a href="{{route('getPartida')}}?id={{$salas->id}}" class="partidas">
        @if($loop->last)
        <div class="row fondoGradiente">
            @else
            <div class="row border border-top-0 border-end-0 border-start-0 border-dark fondoGradiente">
                @endif
                <div class="container-fluid">
                    <div class="row mb-3 mt-3 ">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <p>{{$salas->nombre}}</p>
                                </div>
                            </div>
                        </div>
                        <?php
                        $original = $salas->description;
                        $cortado = substr($original, 0, 80) . "...";
                        ?>
                        <div class="col-md-4">
                            <p><?php echo $cortado; ?></p>
                        </div>
                        <div class="col-md-4 text-center">
                            <p>Jugadores: {{$salas->users}}</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Sistema: {{$salas->system}}</p>
                                </div>
                                <div class="col-md-4 ">
                                    <?php
                                    $tipo;
                                    switch ($salas->type) {
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
                                    <p>Tipo: <?php echo $tipo; ?></p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <p>Duracion: {{$salas->duration}} sesiones</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </a>
    @endforeach
</div>
<style>
a {
  text-align: center;
}


</style>

@include('footer')