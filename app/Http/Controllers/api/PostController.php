<?php

namespace App\Http\Controllers\api;

use App\Post;
use App\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::
        join('post_images', 'post_images.post_id', '=', 'posts.id')->
        join('categories', 'categories.id', '=', 'posts.category_id')->
        select('posts.*', 'categories.title as category', 'post_images.image')->
        orderBy('posts.created_at', 'desc')->paginate(10);
        return $this->successResponse($posts);
        // echo"Hola Mundo!!". Post::orderBy('created_at', 'desc')->paginate(1). return response()->json($posts, 500);
    }

    public function show(Post $post)
    {
        $post->image;
        $post->category;
        return $this->successResponse($post);//ejemplo ->json(array("data"=> $post, "code"=> 500, "msj"=> ''), 500)
       
    }

    public function url_clean(String $url_clean)
    {
        $post = Post::where('url_clean', $url_clean)->firstOrFail();
        $post->image;
        $post->category;
        return $this->successResponse($post);//ejemplo ->json(array("data"=> $post, "code"=> 500, "msj"=> ''), 500)
       
    }

    public function category(category $category)
    {
        //dd($category->post());
        return $this->successResponse(["posts"=>$category->post()->paginate(10), "category"=>$category]);//ejemplo ->json(array("data"=> $post, "code"=> 500, "msj"=> ''), 500)
       
    }
}
