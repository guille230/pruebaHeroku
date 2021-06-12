@include('header')

<div class="container my-4 border border-dark rounded">
    <div class="row border border-dark bg-dark ">
        <div class="col-12 text-center py-2 fondoTit"> 
        <h1 class="tituloPartida">~ {{$partidas->nombre}} ~</h1>
        </div>
    </div>
    <div class="row border border-dark">
        <div class="col-12 text-center py-2 tituloEntrada"> 
        <h3>Creador:  {{$usuarios->username}}</h3>
        </div>
    </div>
    <div class="row border border-dark">
        <div class="col-6 text-center py-2 border-end border-dark d-flex justify-content-center "> 
        <h3 class="detallesPartida">Sistema: <img class="sistema" src="{{asset('img/'.$partidas->system.'.png')}}" alt="Card image cap" width="70" height="70" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{$partidas->system}}"></h3>
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
            <h3 class="detallesPartida ">Tipo de partida: <br><?php echo $tipo;?> </h3>
            </div>
    </div>
    <div class="row border border-dark">
        <div class="col-12 text-center py-2 detallesPartida"> 
        <h3>Duracion: {{$partidas->duration}} sesiones</h3>
        </div>
    </div>
    <div class="row border border-dark  detallesPartida">
        <div class="col-12 text-center py-2"> 
        <h3>Descripcion:</h3>
        <h5>"{{$partidas->description}}"</h5>
        </div>
    </div>
</div>

@include('footer')
<script>
    window.onload = function () {
        $('#popover').popover({
            html: true,
            content: function () {
                return $("#popover-content").html();
            }
        });
    }

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

</script>