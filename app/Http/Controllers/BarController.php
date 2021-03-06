<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use TCG\Voyager\Models\Category;

class BarController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
      $category = Category::where('name', 'Food & Drink')->first();

        return view('staticViews.bar', [
          'category' => $category
        ]);
    }
}
