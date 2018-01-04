<?php

namespace App\Http\Controllers\Process;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;

class ProcessController extends BaseController {

  /**
   * Process controller function.
   * @param $request Request Object.
   * @param $type type of process
   */
  public function toProcess(Request $request, $type) {
    
    $uid = $_POST['user_id'];
    $pass = $_POST['pass'];

    return print_r($_POST, 1);
  }
}