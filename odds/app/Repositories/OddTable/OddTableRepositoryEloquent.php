<?php

namespace App\Repositories\OddTable;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\OddTable;

/**
 * Class OddTableRepositoryEloquent.
 *
 * @package namespace App\Repositories\OddTable;
 */
class OddTableRepositoryEloquent extends BaseRepository implements OddTableRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return OddTable::class;
    }

    public function all($columns = ['*'])
    {
         return $this->model->all($columns);
    }

    /**
         * Boot up the repository, pushing criteria
         */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
