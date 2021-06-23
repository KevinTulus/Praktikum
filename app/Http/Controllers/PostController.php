<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Post::class);
        $posts = Post::paginate(10);
        return view('portal.pages.post.index', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portal.pages.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:1000'],
            'excerpt' => ['required', 'string', 'max:1000'],
            'body' => ['required', 'string', 'max:10000'],
        ]);
        
        $post = new Post;
        $post->title = $request['title'];
        $post->slug = $request['slug'];
        $post->excerpt = $request['excerpt'];
        $post->body = $request['body'];
        $post->image = $request['image'];
        $post->save();

        return redirect()->route('post.index')
                        ->with('success','Post Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::where('id', $id)->first();
        return view('portal.pages.post.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::where('id', $id)->first();
        return view('portal.pages.post.edit',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:1000'],
            'excerpt' => ['string', 'max:1000'],
            'body' => ['required', 'string', 'max:10000'],
        ]);
        
        $post = Post::find($id);
        $post->title = $request['title'];
        $post->slug = $request['slug'];
        $post->excerpt = $request['excerpt'];
        $post->body = $request['body'];
        $post->image = $request['image'];
        $post->save();

        return redirect()->route('post.index')
                        ->with('success','Post Berhasil Diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('post.index')
                        ->with('success','Post Berhasil Dihapus');
    }
}
