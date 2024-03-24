<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Cache::remember('posts-page-'.request('page',1), 120, function(){
            return Post::with('category')->paginate(7);
        });

        // $posts = Cache::rememberForever('posts', function(){
        //     return Post::with('category')->paginate(10);
        // });

        return view('app.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Post::class);
        $categories = Category::all();
        return view('app.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $this->authorize('create', Post::class);
        $fileName = time().'_'.$request->image->getClientOriginalName();
        $request->image->storeAs('uploads', $fileName);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->image = $fileName;
        $post->save();

        return redirect()->route('posts.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('app.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('update', Post::class);
        $post = Post::findOrFail($id);
        $categories = Category::all();

        return view('app.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateRequest $request, string $id)
    {
        $this->authorize('update', Post::class);
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        if(isset($request->image))
        {
            $fileName = time().'_'.$request->image->getClientOriginalName();
            $request->image->storeAs('uploads', $fileName);
            File::delete(public_path($post->image));
            $post->image = $fileName;
        }
        $post->update();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete', Post::class);
        $post = Post::findOrFail($id);
        $post->delete();
        
        return redirect()->route('posts.index');
    }

    public function trashed()
    {
        $this->authorize('delete', Post::class);
        $posts = Post::onlyTrashed()->get();
        return view('app.trashed', compact('posts'));
    }

    public function forceDelete(string $id)
    {
        $this->authorize('delete', Post::class);
        $post = Post::onlyTrashed()->findOrFail($id);
        File::delete(public_path($post->image));
        $post->forceDelete();

        return redirect()->back();
    }

    public function recover(Request $reqeust, string $id)
    {
        $this->authorize('delete', Post::class);
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();

        return redirect()->back();
    }
}
