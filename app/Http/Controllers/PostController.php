<?php

namespace App\Http\Controllers;

use Illuminate\Https\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
   public function index()
   {

    $title = '';

    if(request('category')){
        $category = Category::firstWhere('slug', request('category'));
        $title = "In Category $category->name";
    };  

    if(request('author')){
        $user = User::firstWhere('username', request('author'));
        $title = "By : $user->name";
    };  
  
  
    return  view('posts', [
        "title" => "All Post $title",
        "active" => "post",
        "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
    ]);
   }

   public function show(Post $post)
   {
    return  view('post', [
        "title" => "Single Post",
        "post" => $post,
        "active" => "categories",
        "user" => $post->author->name
    ]);
   }
}
