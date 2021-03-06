<?php

namespace App\Http\Controllers\OperationManager;

use Illuminate\Routing\Controller;

class TasksController extends Controller
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
        return view('operationManager.players-tasks', []);
    }

    public function salesTask()
    {
        return view('operationManager.sales-tasks', []);
    }
}
