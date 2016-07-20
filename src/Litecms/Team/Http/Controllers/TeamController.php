<?php

namespace Litecms\Team\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Litecms\Team\Interfaces\TeamRepositoryInterface;

class TeamController extends BaseController
{
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
        $this->middleware('web');
        $this->setupTheme(config('theme.themes.public.theme'), config('theme.themes.public.layout'));        
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
        $teams = $this->repository->scopeQuery(function ($query) {
            return $query->orderBy('id', 'ASC');
        })->paginate();

        return $this->theme->of('team::public.team.index', compact('teams'))->render();
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
        $team = $this->repository->scopeQuery(function ($query) use ($slug) {
            return $query->orderBy('id', 'DESC')
                ->where('slug', $slug);
        })->first(['*']);

        return $this->theme->of('team::public.team.show', compact('team'))->render();
    }
}
