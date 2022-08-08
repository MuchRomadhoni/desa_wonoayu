@extends('layouts.cobalayout')

@section('content')
<section id="pricing" class="wow fadeInUp section-bg mt-5">
            <div class="container">
                <header class="section-header">
                <h3>Portal Berita</h3>
                <p>Portal berita yang berisikan informasi-informasi terbaru mengenai Desa Plinggisan</p>
                </header>

                <div class="row flex-items-xs-middle flex-items-xs-center">
                    @foreach ($posts as $post)
                    <div class="col-xs-12 col-lg-4 mb-5">
                        <div class="card">
                            @if ($post->thumbnail)
                            <a href=""><img src="{{ $post->takeImage }}" class="card-img-top" style="height: 275px; object-fit: cover; object-position: center;" alt=""></a>
                            @endif
                        <div class="card-block mt-3">
                            <p style="font-size: 12px">{{ $post->created_at->format("d M y") }}</p>
                            <a href=""><h4 class="card-title">{{ $post->title }}</h4></a>
                            <p>{!! Str::limit($post->body, 100) !!}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn">Selengkapnya</a>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
@endsection


