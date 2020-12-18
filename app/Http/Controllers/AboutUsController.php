<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use TCG\Voyager\Models\Category;

class AboutUsController extends Controller
{

    public function __invoke() {
      $category = Category::where('name', 'About us')->first();
      return view('staticViews.about-us', ['category' => $category]);

    }
}
