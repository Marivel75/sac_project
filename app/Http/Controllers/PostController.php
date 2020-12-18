<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use App\Models\Tag;
use App\Models\Sport;
use App\Models\FoodAndDrink;

class PostController extends Controller
{

  public function index() {
    $posts = Post::orderBy('updated_at', 'desc')->get();
    $categories = Category::all();
    $sports = Sport::all();
    $bar = FoodAndDrink::where('name', "The Centenary Oak Bar")->first();
    return view( 'posts.index', [
      'posts' => $posts,
      'categories' => $categories,
      'sports' => $sports,
      'bar' => $bar
      ]);
  }


  public function show($id) {
    $post = Post::where('id', $id)->find($id);

    return view( 'posts.show', ['post' => $post]);
  }

}
