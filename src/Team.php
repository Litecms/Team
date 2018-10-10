<?php

namespace Litecms\Team;

use User;

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
    public function count()
    {
        return  0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.team.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->team->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\TeamUserCriteria());
        }

        $team = $this->team->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('team::' . $view, compact('team'))->render();
    }
}
