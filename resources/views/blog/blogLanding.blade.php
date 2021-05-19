@include('header')

<div class="introBlog-container container">
        <div class="background-title-blogs"></div>
        <h1 class="titleBlogs">FireBlog</h1>
    <div class="row">
        <div class="col-12 col-md-7 videoCol">
            <div class="video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/rMxx8QSAd18" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="frame"></iframe>
            </div>
        </div>

        <div class="col-5 col-md-4 mx-4">
            <h1>Prueba</h1>
            <div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut sit itaque facilis, ullam, dolor provident quod eaque iste est facere voluptates reiciendis! Ipsum maxime illo delectus iusto recusandae numquam sapiente.</p>
            </div>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptates, in nisi quod incidunt reiciendis adipisci obcaecati! Voluptates, corporis cumque unde at earum accusantium, in excepturi dolore nisi eveniet inventore!
            </div>
        </div>
    </div>
</div>

    <div class="entradas-container container">

    
    <div class="row d-flex justify-content-center text-center align-content-center blogsList" id="rowColumnas">
            <div class="d-flex formRow">
                <form id="formu">
                    <select name="category" id="cat" class="form-select">
                        <option value="0">Selecciona una categoria...</option>
                        <option value="tutorial">Tutoriales</option>
                        <option value="noticia">Noticias</option>
                        <option value="colaboracion">Colaboraciones</option>
                    </select>
                    @csrf
                </form>
                
            </div>
        
            @foreach ($entradas as $entrada)
            <div class="col-6 my-5 mx-auto justify-content-center d-flex justify-content-center">
                <div class="card" style="width: 25rem;">
                <img class="card-img-top" src="{{$entrada->image}}" alt="Card image cap" style="height: 15rem">
                <div class="card-body">
                  <h5 class="card-title">{{$entrada->headline}}</h5>
                  <p class="card-text">{{$entrada->body}}</p>
                  <form action="{{route('blogDetail')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$entrada->id}}">
                    <input type="submit" value="Leer" class="btn btn-secondary" style="padding: 0.5rem 1.3rem;">
                  </form>
                </div>
              </div>
            </div>
            @endforeach
    </div>
 </div>
</div>

<script type="text/javascript">
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $("#cat").on('change',function(e){
        e.preventDefault();
        var cat = $('#cat').val() ;

        $.ajax({
              url: '/getCat',
              type: 'post',
              data: {_token: CSRF_TOKEN, cat: cat},
              contentType: "application/json; charset=utf-8",
              dataType: 'json',
              success: function(response){
                console.log(response);
                 createCol(response);
            }    
    });
    });
    

    function createCol(response){
        var len = 0;

        if(response['data'] != null){
         len = response['data'].length;
      }

      if(len > 0){
        for(var i=0; i<len; i++){

            var id = response['data'][i].id;
            var img = response['data'][i].image;
            var headline = response['data'][i].headline;
            var body = response['data'][i].body;

            var ap = ` 
                            <div class="col-6 my-5 mx-auto justify-content-center d-flex justify-content-center">
                            <div class="card" style="width: 25rem;">
                            <img class="card-img-top" src="`+ img +`" alt="Card image cap" style="height: 15rem">
                            <div class="card-body">
                              <h5 class="card-title">`+ headline `+</h5>
                              <p class="card-text">`+ body `+</p>
                              <form action="{{route('productDetail')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="`+ id `+">
                                <input type="submit" value="Leer" class="btn btn-secondary" style="padding: 0.5rem 1.3rem;">
                              </form>
                            </div>
                          </div>
                        </div> `

            $("#rowColumna").append(ap);
        }
    }
}

</script>

@include('footer')