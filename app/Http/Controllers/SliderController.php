<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('sliders.adminsliders', [
            'sliders' => Slider::latest()->paginate(15),
        ]);
    }

    public function create()
    {
        return view('sliders/create');
    }

    public function store(Request $request)
    {
        $attr = request()->validate([
            'imageslider' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);

        $attr = $request->all();

        $imageslider = request()->file('imageslider') ? request()->file('imageslider')->store("images/slider") : null;

        $attr['imageslider'] = $imageslider;

        //create new post
        Slider::create($attr);

        session()->flash('success', 'Slider berhasil di upload');

        return redirect('admin/sliders');
    }

    public function destroy(Slider $slider)
    {
        \Storage::delete($slider->imageslider);
        $slider->delete();
        session()->flash('success', 'Slider berhasil di hapus');
        return redirect('admin/sliders');
    }
}
