<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('galleries.admingalleries', [
            'galleries' => Gallery::latest()->paginate(15),
        ]);
    }

    public function create()
    {
        return view('galleries/create');
    }

    public function store(Request $request)
    {
        $attr = request()->validate([
            'title' => 'required',
            'imagegallery' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);

        $attr = $request->all();

        $imagegallery = request()->file('imagegallery') ? request()->file('imagegallery')->store("images/galleries") : null;

        $attr['imagegallery'] = $imagegallery;

        //create new post
        Gallery::create($attr);

        session()->flash('success', 'Foto berhasil di upload');

        return redirect('admin/galleries');
    }

    public function destroy(Gallery $gallery)
    {
        \Storage::delete($gallery->imagegallery);
        $gallery->delete();
        session()->flash('success', 'Foto berhasil di hapus');
        return redirect('admin/galleries');
    }
}
