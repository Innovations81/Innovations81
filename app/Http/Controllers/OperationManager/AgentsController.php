<?php

namespace App\Http\Controllers\OperationManager;

use Illuminate\Routing\Controller;

class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('operationManager.agents', []);
    }
}
