<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index()
    {
        return Serie::all();
    }

    public function store(Request $request)
    {
        return response()->json(Serie::create($request->all()), 201);
    }
}