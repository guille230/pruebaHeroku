@include('header')

<div class="container-fluid">
    <div class="row background-blog" style="background-image: url({{$entrada->image}});">
        <div class="col-12 d-flex justify-content-center">
            <h2 class="headline-blog-detail">{{$entrada->headline}}</h2>
        </div>
    </div>

    <div class="row bodyRowBlog">
        <div class="col-12 d-flex bodyCol">
            <p class="bodyBlog">{{$entrada->body}}</p>
        </div>
    </div>
</div>



@include('footer')