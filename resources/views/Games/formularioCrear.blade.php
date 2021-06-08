@include('header')
@php
    $us = session('user');
@endphp
<div class="container">
    <div class="row my-3 mx-3">
        <div class="col-12 bg-white">
            <form action="{{route('crearPartida')}}" method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4 my-3 mx-3">
                  <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" name="name" placeholder="La venganza del Mago">
                        <label for="nombre">Nombre</label>
                      </div>
                  </div>
                  <div class="col-2">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="max" name="max" placeholder="5">
                        <label for="max">Maximo jugadores</label>
                    </div>
                  </div>
                </div>
              
                <!-- Text input -->
                <div class="row mb-4">
                <div class="col-4">
                <div class="form-outline mb-4 mx-3">
                    <select class="form-select" name="sistema" aria-label="Sistema">
                        <option selected>Elige un Sistema</option>
                        <option value="{{$sistemas[0]}}">{{$sistemas[0]}}</option>
                        <option value="{{$sistemas[1]}}">{{$sistemas[1]}}</option>
                        <option value="{{$sistemas[3]}}">{{$sistemas[3]}}</option>
                        <option value="{{$sistemas[4]}}">{{$sistemas[4]}}</option>
                        <option value="{{$sistemas[5]}}">{{$sistemas[5]}}</option>
                        <option value="{{$sistemas[6]}}">{{$sistemas[6]}}</option>
                        <option value="{{$sistemas[7]}}">{{$sistemas[7]}}</option>
                      </select>
                </div>
            </div>
            <div class="col-4">
                <div class="form-outline mb-4 mx-3">
                    <select class="form-select" name="tipo" aria-label="Tipo Partida">
                        <option selected>Tipo de Partida</option>
                        <option value="{{$type[0]}}">{{$type[0]}}</option>
                        <option value="{{$type[1]}}">{{$type[1]}}</option>
                        <option value="{{$type[2]}}">{{$type[2]}}</option>
                      </select>
                </div>
            </div>
            <div class="col-2" style="margin-bottom: 3rem">
                <div class="form-floating">
                    <input type="number" class="form-control" name="duracion" id="duracion" name="duracion" placeholder="5">
                    <label for="max">Nº Partidas</label>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="tags" name="tags" placeholder="DnD,Homebrew">
                        <label for="max">Tags</label>
                    </div>
                </div>
            </div>
                <!-- Message input -->
                <div class="row my-3">
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="desc" placeholder="El Rey creo las 5 piedras divinas y entrego una a cada uno de los magos" id="desc" style="height: 100px"></textarea>
                            <label for="desc">Descripcion</label>
                          </div>
                    </div>
                </div>

                <input type="hidden" name="idus" value="{{$us->id}}">
                <input type="hidden" name="fecha" value="{{$today}}">

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
              </form>
        </div>
    </div>
</div>

@include('footer')