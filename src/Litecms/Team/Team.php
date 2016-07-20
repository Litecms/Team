<?php

namespace Litecms\Team;

class Team
{
    /**
     * $team object.
     */
    protected $team;

    /**
     * Constructor.
     */
    public function __construct(\Litecms\Team\Interfaces\TeamRepositoryInterface $team)
    {
        $this->team = $team;
    }

    /**
     * Returns count of team.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count($module = 'team')
    {

        if ($module == 'team') {
            return $this->team
                ->scopeQuery(function ($query) {
                    return $query;
                })
                ->count();
        }

        return $this->team
            ->pushCriteria(new \Litecms\Team\Repositories\Criteria\TeamPublicCriteria())
            ->scopeQuery(function ($query) {
                return $query;
            })->count();
    }

}
