<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiController extends Controller {
  public function miFun() {
    $data = [
      'algo' => 'lel',
      'dos' => 'MSDoS',
    ];
    return view('welcome', $data);
  }
}
