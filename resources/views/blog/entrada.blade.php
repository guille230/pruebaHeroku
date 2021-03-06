@include('header')
<header class="masthead" style="background-image: url('{{$entrada->image}}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1 class="h1Blog">{{$entrada->headline}}</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
               <p class="bodyBlog">{{$entrada->body}}</p>
            </div>
        </div>
    </div>
</article>
@include('footer')