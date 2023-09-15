<?php

namespace App\Repositories;

use App\Models\Serie;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class SerieRepositoryEloquent implements SerieRepositoryInterface
{
    protected $model;

    public function __construct(Serie $model)
    {
        $this->model = $model;
    }

    public function getAll(): LengthAwarePaginator
    {
        return $this->model->paginate(3);
    }

    public function getById($id): ?Serie
    {
        return $this->model->find($id);
    }

    public function create(array $data): Serie
    {
        $validator = Validator::make($data, [
            'name' => 'required|min:5|max:25',
            'descricao' => 'required|min:10|max:1000',
            'link' => 'required|url',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'name.min' => 'O nome deve ter pelo menos 5 caracteres.',
            'name.max' => 'O nome não pode ter mais de 25 caracteres.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'descricao.min' => 'A descrição deve ter pelo menos 10 caracteres.',
            'descricao.max' => 'A descrição não pode ter mais de 1000 caracteres.',
            'link.required' => 'O campo link é obrigatório.',
            'link.url' => 'Insira um link válido.',
        ]);

        if ($validator->fails()) {
            throw ValidationException::withMessages($validator->errors()->toArray());
        }

        return $this->model->create($data);
    }

    public function update($id, array $data): bool
    {
        $serie = $this->getById($id);
        if ($serie) {
            return $serie->update($data);
        }

        return false;
    }

    public function delete($id): bool
    {
        $serie = $this->getById($id);

        if ($serie) {
            return $serie->delete();
        }

        return false;
    }
}