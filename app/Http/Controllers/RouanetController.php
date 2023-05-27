<?php

namespace App\Http\Controllers;

use App\Models\Rouanet;

class RouanetController extends Controller
{
    public function index()
    {
        $data = Rouanet::all();

        return view('welcome', ['data' => $data]);
    }
}
