<?php

namespace App\Services\OddTable;

use App\Repositories\OddTable\OddTableRepository;

/**
 * Class OddTableService
 * @package App\Services
 */
class OddTableService
{
    protected $oddTableRepository;

    public function __construct(OddTableRepository $oddTableRepository)
    {
        $this->oddTableRepository = $oddTableRepository;
    }

    public function all($columns = ['*'])
    {
        return $this->oddTableRepository->all($columns);
    }
}
