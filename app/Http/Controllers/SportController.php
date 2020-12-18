<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sport;

class SportController extends Controller

{
    public function index() {
      $sports = Sport::all();

      return view('sports.index', ['sports' => $sports]);
    }

    public function show($id) {
      $sport = Sport::where('id', $id)->find($id);

      return view('sports.show', ['sport' => $sport]);
    }
}
