<?php

namespace Litecms\Team\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\Team\Interfaces\TeamRepositoryInterface;

class TeamPublicController extends BaseController
{
    // use TeamWorkflow;

    /**
     * Constructor.
     *
     * @param type \Litecms\Team\Interfaces\TeamRepositoryInterface $team
     *
     * @return type
     */
    public function __construct(TeamRepositoryInterface $team)
    {
        $this->repository = $team;
        parent::__construct();
    }

    /**
     * Show team's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $teams = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate(12);


        return $this->response->setMetaTitle(trans('team::team.names'))
            ->view('team::team.index')
            ->data(compact('teams'))
            ->output();
    }

    /**
     * Show team's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $teams = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('team::team.names'))
            ->view('team::team.index')
            ->data(compact('teams'))
            ->output();
    }

    /**
     * Show team.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $team = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->setMetaTitle($$team->name . trans('team::team.name'))
            ->view('team::team.show')
            ->data(compact('team'))
            ->output();
    }

}
