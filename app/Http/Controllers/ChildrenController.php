<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use TCG\Voyager\Models\Category;
use App\Models\Sport;


class ChildrenController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
      $category = Category::where('name', 'Children')->first();
      $sports = Sport::all();

        return view('staticViews.children', [
          'category' => $category,
          'sports' => $sports
        ]);
    }
}
