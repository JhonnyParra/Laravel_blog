<?php

namespace App\Http\Controllers\Process;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;

class ProcessController extends BaseController {

  /**
   * Process controller function.
   * @param $request Request Object.
   * @param $type type of process.
   */
  public function toProcess(Request $request, $type) {
    if(method_exists($this, $type)) {
      return $this->$type($request);
    }

    return view('/',['title' => 'Site | Url not found']);
  }

  /**
   * Login process
   * @param $request Request Object.
   */
  public function login($request) {
    $uid = $_POST['user_id'];
    $pass = $_POST['pass'];

    return view('/',['title' => 'Site | Dashboard']);
  }
}