<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Serie;
use App\Services\SerieService;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    protected $service;

    public function __construct(SerieService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return Serie::all();
    }

    public function store(Request $request)
    {
        return response()->json(Serie::create($request->all()), 201);
    }

    public function show($id)
    {
        $serie = $this->service->getById($id);
        return $serie;
    }
}
