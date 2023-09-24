<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SerieRequest;
use App\Models\Serie;
use App\Services\SerieService;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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

    public function store(SerieRequest $request)
    {
        $data = $request->all();
        return $this->service->create($data);
    }

    public function show($id)
    {
        $serie = $this->service->getById($id);
        return response()->json($serie, 200);
    }

    public function destroy($id)
    {
        $this->service->delete($id);       
        return response()->json(['message' => 'Série excluída com sucesso'], 200);
    }

    public function edit($id, SerieRequest $request)
    {
        $data = $request->All();

        if (!$data) {
            return response()->json(['error' => 'Série não encontrada'], 404);
        }

        $data = $request->validated();
    
        $this->service->update($id, $data);

        return response()->json(['message' => 'Série atualizada com sucesso'], 200);
    }
}
