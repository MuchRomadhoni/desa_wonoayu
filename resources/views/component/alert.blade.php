@if(session()->has('success'))
<div class="container">
    <div class="row mt-3 px-3">
        {{-- <div class="col-sm-3"> --}}
            <div class="alert alert-success">
                {{ session()->get('success') }}
                {{-- <hr>
                <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Saya sudah mengisi form layanan pada wesite desa">
                <button type="button" class="btn btn-success">
                <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png">  Konfirmasi</button></a> --}}
                {{-- <button type="button" class="btn btn-success">Konfirmasi</button> --}}
            </div>
        {{-- </div> --}}
    </div>
</div>
@endif
