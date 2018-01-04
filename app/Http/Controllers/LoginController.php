<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {

  public function validateUser() {
    $data = [
      'title' => 'Site | Dashboard',
    ];
    $view = 'dashboard';
    if(!array_key_exists('login', $_COOKIE) || !isset($_COOKIE['login'])) {
      $data['title'] = 'Site | Login';
      $view = 'login';
    }

    return view($view, $data);
  }
}
