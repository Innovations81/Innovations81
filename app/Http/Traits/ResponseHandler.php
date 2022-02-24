<?php

namespace App\Http\Traits;

use Redirect;

trait ResponseHandler{

    public function response($data = [], $view = null, $exclude_ajax = false)
    {
        $request = request();
        if (($request->is('api*') || $request->ajax()) && !$exclude_ajax) {
            return $this->successResponse($data['data']);
        }
        if (!empty($view)) {
            return view($view, compact('data'));
        }
    }
    protected function successResponse($data, $next = null, $message = null,  $code = 200)
    {
        $request = request();
        if ($request->is('api*') || $request->ajax()) {
            return response()->json([
                'status' => 'Success',
                'message' => $message,
                'data' => $data
            ], $code);
        }
        if ($next) {
            return Redirect::to($next)->with('success', $message);
        } else {
            if (strpos($request->server('HTTP_REFERER'), $request->root()) !== false) {
                return Redirect::back()->with('success', $message);
            } else {
                return Redirect::to('/')->with('success', $message);
            }
        }
    }

    protected function errorResponse($message = null, $next = null, $code = 400)
    {
        $request = request();
        if ($request->is('api*') || $request->ajax()) {
            return response()->json([
                'status' => 'Error',
                'message' => $message,
                'data' => null
            ], $code);
        }
        if ($next) {
            return Redirect::to($next)->with('error', $message);
        } else {
            if (strpos($request->server('HTTP_REFERER'), $request->root()) !== false) {
                return Redirect::back()->with('error', $message)->withInput();
            } else {
                return Redirect::to('/')->with('error', $message)->withInput();
            }
        }
    }
}
