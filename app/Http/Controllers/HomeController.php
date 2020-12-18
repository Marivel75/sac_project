<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use App\Models\Tag;
use App\Models\Sport;
use App\Models\FoodAndDrink;


class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
      $posts = Post::orderBy('updated_at', 'desc')->take(4)->get();
      $categories = Category::all();
      $sports = Sport::all();
      $bar = FoodAndDrink::where('name', "The Centenary Oak Bar")->first();
      return view( 'layouts.home', [
        'posts' => $posts,
        'categories' => $categories,
        'sports' => $sports,
        'bar' => $bar
        ]);
    }
}
