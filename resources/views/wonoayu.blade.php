@extends('layouts.cobalayout')

@section('content')
{{-- Carousel --}}
<div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($sliders as $slider)
        <div class="carousel-item @if($loop->first) active @endif">
            <a href="{{ $slider->link }}" target="_blank" rel="noopener noreferrer"><img
                    src="{{ $slider->takeImage }}/{{ $slider->imageslider }}" class="d-block w-100" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
                <h3>{{ $slider->title }}</h3>
                <p>{{ $slider->subtitle }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

{{-- Tentang Desa --}}
<section id="about">
    <div class="container">
        <div class="row">

            <div class="pt-5 col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="{{asset('/balaidesa.jpg')}}" alt="">
                </div>
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="about-content">
                    <h2>Tentang Desa</h2>
                    <h3>Singkat tentang Desa Plinggisan.</h3>
                    <p> PROFIL DESA Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi error laborum quis, earum omnis pariatur necessitatibus atque nisi tempore. Facere rerum harum quod eos quos eaque ipsam ullam ad fugit?. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia cupiditate totam enim voluptatum? Ex blanditiis illum excepturi cupiditate repellendus dolorum expedita necessitatibus sequi quasi. Quas ipsam repellendus reprehenderit exercitationem fugit! </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cupiditate eaque a suscipit esse atque ullam? Cum id commodi facilis inventore dolor aliquam necessitatibus temporibus nemo asperiores a, eaque est.</p>
                    <ul>
                        <li><i class="ion-android-checkmark-circle"></i>Luas desa 254,6 ha 630 mdpl</li>
                        <li><i class="ion-android-checkmark-circle"></i>Memiliki 1551 jumlah jiwa dan 6 RT</li>
                        <li><i class="ion-android-checkmark-circle"></i>Desa yang sejuh dan subur dan memiliki potensi
                            tinggi dalam sektor pertanian</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Statistik Desa --}}
<section id="why-us" class="wow fadeIn">
    <div class="container-fluid">

        <header class="section-header">
            <h3>Statistik Desa</h3>
            <p>Statistik data kependudukan Desa Plinggisan</p>
        </header>

    </div>

    {{-- Jumlah --}}
    <div class="container">
        <div class="row counters">
            @foreach ($statistics as $statistic)
            <div class="col-md text-center">
                <span data-toggle="counter-up">{{ $statistic->penduduk }}</span>
                <p>Penduduk</p>
            </div>
            <div class="col-md text-center">
                <span data-toggle="counter-up">{{ $statistic->kepala_keluarga }}</span>
                <p>Kepala Keluarga</p>
            </div>
            <div class="col-md text-center">
                <span data-toggle="counter-up">{{ $statistic->anggota_keluarga }}</span>
                <p>Anggota Keluarga</p>
            </div>
            <div class="col-md text-center">
                <span data-toggle="counter-up">{{ $statistic->male }}</span>
                <p>Laki-laki</p>
            </div>
            <div class="col-md text-center">
                <span data-toggle="counter-up">{{ $statistic->female }}</span>
                <p>Perempuan</p>
            </div>

            @endforeach
        </div>
    </div>
</section>

{{-- Perangkat Desa --}}
<section id="team">
    <div class="container">
        <div class="section-header">
            <h3>Perangkat Desa</h3>
            <p>Struktur Organisasi dan Tata Kerja Pemerintah Desa Plinggisan Kecamatan Kraton, Kabupaten Pasuruan, Jawa Timur
                Timur</p>
        </div>

        <div class="row">

            @foreach ($perangkatdesas as $perangkatdesa)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="member">
                    @if($perangkatdesa->imageprofile)
                    <img src="{{ $perangkatdesa->takeImage }}/{{ $perangkatdesa->imageprofile }}" class="img-fluid"
                        alt="">
                    @else
                    <img src="{{asset('/img/userprofileplaceholder.jpg')}}" class="img-fluid" alt=""
                        style="object-fit: cover; object-position: center;">
                    @endif
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>{{ $perangkatdesa->name }}</h4>
                            <span>{{ $perangkatdesa->title }}</span>
                            {{-- <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>

{{-- Kata Masyarakat --}}
{{-- <section id="testimonials">
    <div class="container">

        <header class="section-header">
            <h3>Kata Masyarakat</h3>
        </header>

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="owl-carousel testimonials-carousel wow fadeInUp">

                    @foreach ($posts as $post)
                    <div class="testimonial-item">
                        @if($post->thumbnail)
                        <img src="{{ $post->takeImage }}"
style="object-fit: cover; object-position: center; width: 100px; height: 100px"
class="testimonial-img" alt="">
@else
<img src="{{asset('/img/userprofileplaceholder.jpg')}}"
    style="object-fit: cover; object-position: center; width: 100px; height: 100px" class="testimonial-img" alt="">
@endif
<h3>{{ $post->title }}</h3>
<h4>Ceo &amp; Founder</h4>
<p>
    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
</p>
</div>
@endforeach

</div>

</div>
</div>


</div>
</section> --}}

{{-- Pelayanan --}}
<section id="services" class="section-bg">
    <div class="container">

        <header class="section-header">
            <h3>Pelayanan</h3>
            <p>Pelayanan yang diberikan oleh Pemerintah Desa kepada Masyaratak Desa Plinggisan.</p>
        </header>

        <div class="row d-flex justify-content-center">

            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline"
                            style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="formktp">Layanan Pengurusan Kartu Tanda Penduduk</a></h4>
                    <p class="description">Layanan Ini Mencakup Pengajuan KTP Baru, KTP Hilang, dan Perubahan Data KTP
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline"
                            style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="formkk">Layanan Pendaftaran Kartu Keluarga</a></h4>
                    <p class="description">Layanan Ini Mencakup Pendaftaran Isian Kartu Keluarga (KK)</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline"
                            style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="formaktakelahiran">Layanan Pengurusan Akta Kelahiran</a></h4>
                    <p class="description">Layanan Ini Mencakup Pendaftaran Akta Kelahiran</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline"
                            style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="formaktakematian">Layanan Pengurusan Akta Kematian</a></h4>
                    <p class="description">Layanan Ini Mencakup Pendaftaran Akta Kematian</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline"
                            style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="suratpernyataan">Layanan Pengurusan Surat Pernyataan Kematian</a></h4>
                    <p class="description">Layanan Ini Mencakup Pengurusan Surat Pernyataan Kematian</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline"
                            style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="pelaporankematian">Layanan Pelaporan Kematian</a></h4>
                    <p class="description">Layanan Ini Mencakup Pelaporan Kematian</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                <div class="box">
                    <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline"
                            style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="persyaratan">Persyaratan Pengurusan Dokumen Penting dan Pendirian
                            Usaha</a></h4>
                    <p class="description">Layanan Ini Memberi Info tentang Persyaratan Pengurusan Dokumen Penting dan
                        Pendirian Usaha</p>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- Curhat Desa --}}
<section id="call-to-action" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
                <h3 class="cta-title">Curhat Desa</h3>
                <p class="cta-text">Wadah untuk menyampaikan kritik dan saran mengenai keluhan tentang Desa Plinggisan.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
                {{-- ganti dengan nomor WA desa --}}
                <a class="cta-btn align-middle" href="https://api.whatsapp.com/send?phone=+62 822-2898-0624">Curhat Desa</a>
            </div>
        </div>

    </div>
</section>
{{--
        {{-- Empty Section 2 --}}
{{-- <section id="features">
            <div class="container">

                <div class="row feature-item">
                <div class="col-lg-6 wow fadeInUp">
                    <img src="frontend/img/features-1.svg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                    <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                    <p>
                    Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
                    </p>
                    <p>
                    Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                    </p>
                </div>
                </div>

                <div class="row feature-item mt-5 pt-5">
                <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                    <img src="frontend/img/features-2.svg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                    <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
                    <p>
                    Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
                    </p>
                    <p>
                    Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                    </p>
                    <p>
                    Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
                    </p>
                </div>

                </div>

            </div>
        </section>  --}}

{{-- Portal Berita --}}
<section id="pricing" class="wow fadeInUp section-bg">
    <div class="container">

        <header class="section-header">
            <a href="posts/allposts" class="">
                <h3>Portal Berita</h3>
            </a>
            <p>Portal berita yang berisikan informasi-informasi terbaru mengenai Desa Plinggisan.</p>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">
            @foreach ($posts as $post)
            <div class="col-xs-12 col-lg-4">
                <div class="card">
                    @if ($post->thumbnail)
                    <a href=""><img src="{{ $post->takeImage }}" class="card-img-top"
                            style="height: 275px; object-fit: cover; object-position: center;" alt=""></a>
                    @endif
                    <div class="card-block mt-3">
                        <p style="font-size: 12px">{{ $post->created_at->format("d M y") }}</p>
                        <a href="">
                            <h4 class="card-title">{{ $post->title }}</h4>
                        </a>
                        <p>{!! Str::limit($post->body, 100) !!}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- <div class="row mt-5 d-flex justify-content-center">
                    <div class="card pb-0">
                    <a href="#" class="btn">Semua Berita</a>
                    </div>
                </div> --}}
    </div>
</section>

{{-- Galeri --}}
<section id="portfolio" class="section-bg">
    <div class="container">

        <header class="section-header">
            <a href="/galleries" class="">
                <h3 class="section-title">Galeri</h3>
            </a>
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
                            <a href="{{ $gallery->takeImage }}/{{ $gallery->imagegallery }}" data-lightbox="portfolio"
                                class="link-preview" title="{{ $gallery->title }}"><i class="ion ion-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
    {{-- <div class="row mt-5 d-flex justify-content-center">
                <div class="card pb-0">
                <a href="#" class="btn">Semua Foto</a>
                </div>
            </div> --}}
</section>

{{-- Didukung Oleh --}}
{{-- <section id="clients" class="wow fadeInUp">
            <div class="container">

                <header class="section-header">
                <h3>Didukung Oleh</h3>
                </header>

                <div class="owl-carousel clients-carousel">
                <img src="{{asset('logokabmalang.svg')}}" alt="">
<img src="{{asset('logoumm.png')}}" alt="">
</div>

</div>
</section> --}}

{{-- Tanya Jawab --}}
<section id="faq">
    <div class="container">
        <header class="section-header">
            <h3>Tanya Jawab</h3>
            <p>Pertanyaan yang sering diajukan masyarakat kepada Pemerintah Desa.</p>
        </header>

        <ul id="faq-list" class="wow fadeInUp">
            <li>
                <a data-toggle="collapse" class="collapsed" href="#faq1">Apakah saya bisa melihat berita terupdate di
                    website ini?
                    <i class="ion-android-remove"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                        Anda bisa melihat berita terupdate di kolom berita.
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Apakah website ini menyediakan statistik
                    kependudukan?<i class="ion-android-remove"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                        Anda dapat melihat statistik kependudukan desa Plinggisan pada halaman website ini.
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">Persyaratan apa saja yang harus dibawa saat
                    akan mengurus dokumen penting?<i class="ion-android-remove"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                        Untuk persyaratan anda bisa melihat pada fitur layanan dan silahkan pilih opsi persyaratan
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">Apakah saya bisa memberikan kritik dan saran
                    terhadap desa Plinggisan melalui web ini?<i class="ion-android-remove"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                        Anda bisa memberikan kritik, saran dan masukan untuk desa Plinggisan pada fitur curhat desa yang
                        telah disediakan di
                        website ini.
                    </p>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#faq5" class="collapsed">Saat mengisi form, apakah saya perlu
                    mendaftarkan email?<i class="ion-android-remove"></i></a>
                <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                        Anda tidak perlu melakukan registrasi untuk pengisian form, cukup masukkan data diri anda pada
                        kolom yang disediakan.
                    </p>
                </div>
            </li>

        </ul>

    </div>
</section>
@endsection