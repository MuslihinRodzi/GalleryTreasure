@extends("layout")

@section("content")

<section class="py-5 text-center container section-background">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light" style="color: white;">Gallery Treasure</h1>
                <p class="lead text-white">This website develop using laravel, it can give ideas in designing your own gallery(images & description) or make portfolios using the templete</p>
            </div>
        </div>
    </section>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($posts as $post)
                <div class="col">
                    <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{asset($post->image)}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"/>
                            </img>
                        <div class="card-body">
                            <p class="card-text">{{$post->title}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                <a href="\about\{{$post->id}}">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    </a>
                                            <a href="{{ asset($post->image) }}" download>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Download Image</button>
                                            </a>
                                </div>
                                <a href="{{ route('quote', ['post' => $post->id]) }}" class="btn btn-sm btn-outline-secondary">Quotes</a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
