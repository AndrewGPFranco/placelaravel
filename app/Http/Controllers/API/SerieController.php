<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SerieRequest;
use App\Models\Serie;
use App\Services\SerieService;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;

class SerieController extends Controller
{
    protected Serie $model;

    public function __construct(Serie $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->all();
    }

    public function store(SerieRequest $request)
    {
        $data = $request->all();
        $serie = $this->model->create($data);
        return $serie;
    }

    public function show($id)
    {
        try {
            $serie = $this->model->findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json($e->getMessage(), 404);
        }

        return response()->json($serie, 200);
    }

    public function destroy($id)
    {
        $serie = $this->model->find($id);
        if (!$serie) {
            return response()->json(['message' => 'Serie não encontrada'], 404);
        } else {
            $this->model->destroy($id);
            return response()->json(['message' => 'Série excluída com sucesso'], 200);
        }
    }

    public function edit($id, SerieRequest $request)
    {
        // Verificar se a série com o ID fornecido existe
        $serie = $this->model->find($id);

        if (!$serie) {
            return response()->json(['error' => 'Série não encontrada'], 404);
        }

        $data = $request->validated();

        // Atualizar a série com os novos dados
        $serie->update($data);

        return response()->json(['message' => 'Série atualizada com sucesso'], 200);
    }
}
