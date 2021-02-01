<?php

namespace App\Http\Controllers\dashboard;

use App\category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\PostImage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth', 'rol.admin']);
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('dashboard.post.index', ['posts' => $posts]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::pluck('id', 'title');
        return view('dashboard.post.create', ['post' => new Post(), 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
        //dd($request->validated());

        // $request->validate([
        //     'title'=> 'require|min:5|max:500',
        //     'content' => 'required|min:5'
        // ]);

        echo"Hola Mundo ".$request->content;
        Post::create($request->validated());
        return back()->with('status', 'Post creado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $post = Post::findOrFail($id);
        return view('dashboard.post.show', ["post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = category::pluck('id', 'title');
        return view('dashboard.post.edit', ['post'=>$post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request, Post $post)
    {
        $post->update($request->validated());
        return back()->with('status', 'Post actualizado con Exito');
    }

    public function image(Request $request, Post $post)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:10240' //10Mb
        ]);
        $filename = time() .".". $request->image->extension();
        $request->image->move(public_path('image'), $filename);
        PostImage::create(['image'=> $filename, 'post_id'=> $post->id]);
        return back()->with('status', 'Imagen cargada con Exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('status', 'Post eliminado con èxito');

    }
}
