<?php

namespace Litecms\Team\Repositories\Eloquent;

use Litecms\Team\Interfaces\TeamRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class TeamRepository extends BaseRepository implements TeamRepositoryInterface
{
    /**
     * Booting the repository.
     *
     * @return null
     */
    public function boot()
    {
        $this->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'));
    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        $this->fieldSearchable = config('package.team.team.search');
        return config('package.team.team.model');
    }
}
