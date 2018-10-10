<?php

namespace Litecms\Team\Repositories\Eloquent;

use Litecms\Team\Interfaces\TeamRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class TeamRepository extends BaseRepository implements TeamRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.team.team.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.team.team.model.model');
    }
}
