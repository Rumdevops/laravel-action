<?php

namespace App\Repositories\OddTable;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface OddTableRepository.
 *
 * @package namespace App\Repositories\OddTable;
 */
interface OddTableRepository extends RepositoryInterface
{
    public function all($columns = ['*']);
}
