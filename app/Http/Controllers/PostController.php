<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Clockwork\Request\Request as RequestRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post.index', [
            "title" => "Post",
            "post" => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create', [
            "title" => "Post",
            "active" => "post"
        ]);
    }

    public function store(Request $request)
    {
        $inputData =  $request->validate([
            'title' => 'required|max:225',
            'slug' => 'required|unique:posts',
            'exceprt' => 'required',
            'body' => 'required',
        ]);
        // return request()->all();

        Post::create($inputData);
        // // $request->session()->flash('success', 'Registration successfully..!');
        return redirect('/post')->with('success', 'Post successfully..!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('abouts', [
            "title" => "Single About",
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', [
            "title" => "Edit post",
            "post" => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $inputData =  [
            'title' => 'required|max:225',
            'exceprt' => 'required',
            'body' => 'required',
        ];
        if ($request->slug != $post->slug) {
            $inputData['slug'] = 'required|unique:posts';
        }


        $validata = $request->validate($inputData);
        // $validata['exceprt'] = Str::limit(strip_tags($request->body), 200);
        Post::where('id', $post->id)
            ->update($validata);
        return redirect('/post')->with('success', 'Post has been update..!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Post::destroy($request->slug);
        // // $request->session()->flash('success', 'Registration successfully..!');
        return redirect('/post')->with('success', 'Post ha been delete..!');
    }
    public function checkSlug(Request $request)
    {
        // dd(request()->title);
        $slug = SlugService::createSlug(Post::class, 'slug', request()->title);
        return response()->json(['slug' => $slug]);
    }
}
