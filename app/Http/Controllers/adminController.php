<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Post;
use App\Slider;
use App\Statistic;
use App\PerangkatDesa;
use Dotenv\Result\Success;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;

class adminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('wonoayu', [
            'posts' => Post::latest()->paginate(3),
            'sliders' => Slider::latest()->paginate(5),
            'statistics' => Statistic::all(),
            'perangkatdesas' => PerangkatDesa::all(),
            'galleries' => Gallery::latest()->paginate(5),
        ]);
    }

    public function allPost()
    {
        return view('posts.allposts', [
            'posts' => Post::latest()->paginate(9),
        ]);
    }

    public function gallery()
    {
        return view('galleries.galleries', [
            'galleries' => Gallery::latest()->paginate(9),
        ]);
    }

    public function throwAdmin()
    {
        return redirect('admin/posts');
    }
}
