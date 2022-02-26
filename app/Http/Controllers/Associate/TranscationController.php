<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Routing\Controller;

class TranscationController extends Controller
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
        return view('associate.transcations', []);
    }
}
