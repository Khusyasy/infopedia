<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
  /**
   * success response method.
   *
   * @return \Illuminate\Http\Response
   */
  public function sendResponse($data, $message = "success", $code = 200)
  {
    $response = [
      'success' => true,
      'data' => $data,
      'message' => $message,
    ];

    return response()->json($response, $code);
  }

  /**
   * return error response.
   *
   * @return \Illuminate\Http\Response
   */
  public function sendError($data = [], $message = "Not Found", $code = 404)
  {
    $response = [
      'success' => false,
      'message' => $message,
    ];

    if (!empty($data)) {
      $response['data'] = $data;
    }

    return response()->json($response, $code);
  }
}
