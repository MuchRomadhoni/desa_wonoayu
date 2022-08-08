<div class="row px-5 py-5">
    <a href="/" target="blank">
        <h1>Desa Plinggisan</h1>
    </a>
</div>

<div class="row px-5 ">
    <h3>Halaman @yield('title.app') Admin</h3>
</div>

<div class="row px-5">
    <div class="d-grid gap-5 d-md-block">
        <a href="posts"><button class="btn btn-warning" type="button">Berita</button></a>
        <a href="sliders"><button class="btn btn-warning" type="button">Slider</button></a>
        <a href="statistics"><button class="btn btn-warning" type="button">Statistik</button></a>
        <a href="perangkatdesa"><button class="btn btn-warning" type="button">Perangkat Desa</button></a>
        <a href="galleries"><button class="btn btn-warning" type="button">Gallery</button></a>
        <a href="ktp"><button class="btn btn-warning" type="button">Print</button></a>
    </div>
</div>

<div class="row px-5">
    <div class="py-3 d-flex justify-content-center">
        <a class="btn btn-danger" href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>