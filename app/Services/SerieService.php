<?php 

namespace App\Services;

use App\Repositories\SerieRepositoryInterface;
use Illuminate\Support\Collection;

class SerieService
{
    protected $serieRepository;

    public function __construct(SerieRepositoryInterface $serieRepository)
    {
        $this->serieRepository = $serieRepository;
    }

    public function getAll(): Collection
    {
        return $this->serieRepository->getAll();
    }

    public function getById($id)
    {
        return $this->serieRepository->getById($id);
    }

    public function create(array $data)
    {
        // Realize qualquer lógica adicional necessária antes de criar a série, se houver.
        return $this->serieRepository->create($data);
    }

    public function update($id, array $data): bool
    {
        // Realize qualquer lógica adicional necessária antes de atualizar a série, se houver.
        return $this->serieRepository->update($id, $data);
    }

    public function delete($id): bool
    {
        // Realize qualquer lógica adicional necessária antes de excluir a série, se houver.
        return $this->serieRepository->delete($id);
    }
}