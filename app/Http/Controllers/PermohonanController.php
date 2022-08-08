<?php

namespace App\Http\Controllers;

use App\ktp;
use App\kk;
use App\aktakelahiran;

use Illuminate\Http\Request;

class PermohonanController extends Controller
{

    //KTP
    public function ktpindex()
    {
        return view('formpelayanan.admin.adminktp', [
            'morektp' => ktp::latest()->paginate(15),
        ]);
    }
    public function ktpstore(Request $request)
    {
        $attr = request()->validate([
            'permohonan_ktp' => 'required',
            'nama_lengkap' => 'required',
            'no_kk' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
        ]);

        $attr = $request->all();

        //create new post
        ktp::create($attr);

        session()->flash('success', 'Form berhasil di upload, silahkan konfirmasi pada pihak desa melalui tombol "Konfirmasi" dibawah ini');

        return redirect('formktp');
    }
    public function ktptopdf(Ktp $ktp){
        $result = \PDF::loadview('formpelayanan.pdf.pdfktp',compact('ktp'));
        return $result->stream('KTP');
    }
    public function ktpdestroy(Ktp $ktp)
    {
        $ktp->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect('admin/ktp');
    }

    //KK
        public function kkindex()
    {
        return view('formpelayanan.admin.adminkk', [
            'morekk' => kk::latest()->paginate(15),
        ]);
    }
    public function kkstore(Request $request)
    {
        $attr = request()->validate([
            'nama_kepala' => 'required',
            'dusun_kepala' => 'required',
            'jml_anggota' => 'required',
            'telepon' => 'required',
            'rt_kepala' => 'required',
            'rw_kepala' => 'required'
        ]);

        $attr = $request->all();

        //create new post
        kk::create($attr);

        session()->flash('success', 'Form berhasil di upload, silahkan konfirmasi pada pihak desa melalui tombol "Konfirmasi" dibawah ini');

        return redirect('formkk');
    }
    public function kktopdf(kk $kk){
        $result = \PDF::loadview('formpelayanan.pdf.pdfkk',compact('kk'));
        return $result->stream('KK');
    }
    public function kkdestroy(kk $kk)
    {
        $kk->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect('admin/kk');
    }

    //aktakelahiran
        public function aktakelahiranindex()
    {
        return view('formpelayanan.admin.adminaktakelahiran', [
            'moreaktakelahiran' => kk::latest()->paginate(15),
        ]);
    }
    public function aktakelahiranstore(Request $request)
    {
        $attr = request()->validate([
            'nama_kepala_keluarga' => 'required',
            'nomor_kartu_keluarga' => 'required',
            'nama_anak' => 'required',
            'jenis_kelamin_anak' => 'required',
            'tempat_dilahirkan' => 'required',
            'tempat_kelahiran' => 'required',
            'hari_kelahiran' => 'required',
            'tanggal_kelahiran' => 'required',
            'waktu_kelahiran' => 'required',
            'jenis_kelahiran' => 'required',
            'kelahiran_ke' => 'required',
            'penolong_kelahiran' => 'required',
            'berat_bayi' => 'required',
            'panjang_bayi' => 'required'
        ]);

        $attr = $request->all();

        //create new post
        aktakelahiran::create($attr);

        session()->flash('success', 'Form berhasil di upload, silahkan konfirmasi pada pihak desa melalui tombol "Konfirmasi" dibawah ini');

        return redirect('formaktakelahiran');
    }
    public function aktakelahirantopdf(aktakelahiran $aktakelahiran){
        $result = \PDF::loadview('formpelayanan.pdf.pdfaktakelahiran',compact('aktakelahiran'));
        return $result->stream('aktakelahiran');
    }
    public function aktakelahirandestroy(aktakelahiran $aktakelahiran)
    {
        $aktakelahiran->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect('admin/aktakelahiran');
    }
}
