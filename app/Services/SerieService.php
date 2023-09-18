<?php 

namespace App\Services;

use App\Repositories\SerieRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class SerieService
{
    protected $serieRepository;

    public function __construct(SerieRepositoryInterface $serieRepository)
    {
        $this->serieRepository = $serieRepository;
    }

    public function getAll(): LengthAwarePaginator
    {
        return $this->serieRepository->getAll();
    }

    public function getById($id)
    {
        return $this->serieRepository->getById($id);
    }

    public function create(array $data)
    {
        return $this->serieRepository->create($data);
    }

    public function update($id, array $data): bool
    {
        return $this->serieRepository->update($id, $data);
    }

    public function delete($id): bool
    {
        return $this->serieRepository->delete($id);
    }
}