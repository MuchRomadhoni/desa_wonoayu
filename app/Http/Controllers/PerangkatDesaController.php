<?php

namespace App\Http\Controllers;

use App\PerangkatDesa;
use Illuminate\Http\Request;

class PerangkatDesaController extends Controller
{
    public function index()
    {
        return view('perangkatdesas.adminperangkatdesa', [
            'perangkatdesas' => PerangkatDesa::latest()->paginate(15),
        ]);
    }

    public function create()
    {
        return view('perangkatdesas.create');
    }

    public function store(Request $request)
    {
        $attr = request()->validate([
            'name' => 'required|min:3',
            'title' => 'required',
            'imageprofile' => 'image|mimes:jpeg,png,jpg,svg',
        ]);

        $attr = $request->all();

        $imageprofile = request()->file('imageprofile') ? request()->file('imageprofile')->store("images/imageprofiles") : null;

        $attr['imageprofile'] = $imageprofile;

        //create new post
        PerangkatDesa::create($attr);

        session()->flash('success', 'Perangkat Desa berhasil di upload');

        return redirect('admin/perangkatdesa');
    }

    public function edit(PerangkatDesa $perangkatdesa)
    {
        return view('perangkatdesas.edit', compact('perangkatdesa'));
    }

    public function update(PerangkatDesa $perangkatdesa)
    {
        //validate the field
        $attr = request()->validate([
            'name' => 'required|min:3',
            'title' => 'required',
            'imageprofile' => 'image|mimes:jpeg,png,jpg,svg',
        ]);

        if (request()->file('imageprofile')) {
            \Storage::delete($perangkatdesa->imageprofile);
            $imageprofile = request()->file('imageprofile')->store("images/imageprofiles");
        } else {
            $imageprofile = $perangkatdesa->imageprofile;
        }

        $attr['imageprofile'] = $imageprofile;

        $perangkatdesa->update($attr);

        session()->flash('success', 'Perangkat Desa berhasil diedit');

        return redirect('admin/perangkatdesa');
    }

    public function destroy(PerangkatDesa $perangkatdesa)
    {
        \Storage::delete($perangkatdesa->imageprofile);
        $perangkatdesa->delete();
        session()->flash('success', 'Perangkat Desa berhasil dihapus');
        return redirect('admin/perangkatdesa');
    }
}
