<?php

namespace App\Repositories;

use App\Models\Serie;
use Illuminate\Support\Collection as SupportCollection;

class SerieRepositoryEloquent implements SerieRepositoryInterface
{
    protected $model;

    public function __construct(Serie $model)
    {
        $this->model = $model;
    }

    public function getAll(): SupportCollection
    {
        return $this->model->all();
    }

    public function getById($id): ?Serie
    {
        return $this->model->find($id);
    }

    public function create(array $data): Serie
    {
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