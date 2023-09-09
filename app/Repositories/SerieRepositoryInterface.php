<?php

namespace App\Repositories;

interface SerieRepositoryInterface
{
    public function getAll(); // Retorna todas as séries

    public function getById($id); // Retorna uma série por ID

    public function create(array $data); // Cria uma nova série com base nos dados fornecidos

    public function update($id, array $data); // Atualiza uma série existente por ID e dados fornecidos

    public function delete($id); // Exclui uma série por ID
}