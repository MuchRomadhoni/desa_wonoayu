@extends('layouts.cobalayout')

@section('content')
<section id="portfolio" class="section-bg mt-5">
            <div class="container">

                <header class="section-header">
                <h3 class="section-title">Galeri</h3>
                <p>Galeri kegiatan kegiatan Desa Plinggisan.</p>
                </header>

                <div class="row portfolio-container">

                @foreach ($galleries as $gallery)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ $gallery->takeImage }}/{{ $gallery->imagegallery }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><a href="" class="">{{ $gallery->title }}</a></h4>
                            <div>
                                <a href="{{ $gallery->takeImage }}/{{ $gallery->imagegallery }}" data-lightbox="portfolio" class="link-preview" title="{{ $gallery->title }}"><i class="ion ion-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                </div>

            </div>
        </section>
@endsection


