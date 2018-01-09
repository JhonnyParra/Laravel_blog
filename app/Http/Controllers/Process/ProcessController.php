<?php

namespace App\Http\Controllers\Process;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
USE Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller as BaseController;

class ProcessController extends BaseController {

  /**
   * Process controller function.
   * @param $request Request Object.
   * @param $type type of process.
   */
  public function toProcess(Request $request, $type) {
    if(method_exists($this, $type)) {
      print_r($request,1);
      return $this->$type($request);
    }

    return view('dashboard')->with(['title' => 'Site | Url not found']);
  }

  /**
   * Login process.
   * @param $request Request Object.
   */
  public function login($request) {
    if($request->method() == 'POST') {
      $user = $_POST['user_id'];
      $pass = encrypt($_POST['pass']);
     
      $query = DB::select('select usertestname, password from test_users where usertestname = :un', [':un' => $user]);

      return print_r($pass, 1);

      return view('dashboard')->with(['title' => 'Site | Dashboard']);
    }

    return new RedirectResponse('/');
  }
}