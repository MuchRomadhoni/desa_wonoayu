<?php

namespace App\Http\Controllers;

use App\Post;
use App\Slider;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.adminposts', [
            'posts' => Post::latest()->paginate(15),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $attr = request()->validate([
            'title' => 'required|min:3',
            'body' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,svg',
        ]);

        $attr = $request->all();

        $slug = \Str::slug(request('title'));
        $attr['slug'] = $slug;

        $thumbnail = request()->file('thumbnail') ? request()->file('thumbnail')->store("images/posts") : null;

        $attr['thumbnail'] = $thumbnail;

        //create new post
        Post::create($attr);

        session()->flash('success', 'Berita berhasil di upload');

        return redirect('admin/posts');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        //validate the field
        $attr = request()->validate([
            'title' => 'required|min:3',
            'body' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        if (request()->file('thumbnail')) {
            \Storage::delete($post->thumbnail);
            $thumbnail = request()->file('thumbnail')->store("images/posts");
        } else {
            $thumbnail = $post->thumbnail;
        }

        $attr['thumbnail'] = $thumbnail;

        $post->update($attr);

        session()->flash('success', 'Berita berhasil diedit');

        return redirect('admin/posts');
    }

    public function destroy(Post $post)
    {
        \Storage::delete($post->thumbnail);
        $post->delete();
        session()->flash('success', 'Berita berhasil dihapus');
        return redirect('admin/posts');
    }
}
