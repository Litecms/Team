<?php

namespace Litecms\Team\Http\Controllers;

use App\Http\Controllers\Controller as baseController;
use Litecms\Team\Http\Requests\TeamUserApiRequest;
use Litecms\Team\Interfaces\TeamRepositoryInterface;
use Litecms\Team\Models\Team;

/**
 * User API controller class.
 */
class TeamUserApiController extends baseController
{
    /**
     * Initialize team controller.
     *
     * @param type TeamRepositoryInterface $team
     *
     * @return type
     */
    public function __construct(TeamRepositoryInterface $team)
    {
        $this->repository = $team;
        $this->middleware('api');
        $this->middleware('jwt.auth:api');
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
        parent::__construct();
    }

    /**
     * Display a list of team.
     *
     * @return json
     */
    public function index(TeamUserApiRequest $request)
    {
        $teams = $this->repository
            ->pushCriteria(new \Litecms\Team\Repositories\Criteria\TeamUserCriteria())
            ->setPresenter('\\Litecms\\Team\\Repositories\\Presenter\\TeamListPresenter')
            ->scopeQuery(function ($query) {
                return $query->orderBy('id', 'DESC');
            })->all();
        $teams['code'] = 2000;
        return response()->json($teams)
            ->setStatusCode(200, 'INDEX_SUCCESS');

    }

    /**
     * Display team.
     *
     * @param Request $request
     * @param Model   Team
     *
     * @return Json
     */
    public function show(TeamUserApiRequest $request, Team $team)
    {

        if ($team->exists) {
            $team         = $team->presenter();
            $team['code'] = 2001;
            return response()->json($team)
                ->setStatusCode(200, 'SHOW_SUCCESS');
        } else {
            return response()->json([])
                ->setStatusCode(400, 'SHOW_ERROR');
        }

    }

    /**
     * Show the form for creating a new team.
     *
     * @param Request $request
     *
     * @return json
     */
    public function create(TeamUserApiRequest $request, Team $team)
    {
        $team         = $team->presenter();
        $team['code'] = 2002;
        return response()->json($team)
            ->setStatusCode(200, 'CREATE_SUCCESS');
    }

    /**
     * Create new team.
     *
     * @param Request $request
     *
     * @return json
     */
    public function store(TeamUserApiRequest $request)
    {
        try {
            $attributes            = $request->all();
            $attributes['user_id'] = user_id('admin.api');
            $team                  = $this->repository->create($attributes);
            $team                  = $team->presenter();
            $team['code']          = 2004;

            return response()->json($team)
                ->setStatusCode(201, 'STORE_SUCCESS');
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 4004,
            ])->setStatusCode(400, 'STORE_ERROR');
        }

    }

    /**
     * Show team for editing.
     *
     * @param Request $request
     * @param Model   $team
     *
     * @return json
     */
    public function edit(TeamUserApiRequest $request, Team $team)
    {

        if ($team->exists) {
            $team         = $team->presenter();
            $team['code'] = 2003;
            return response()->json($team)
                ->setStatusCode(200, 'EDIT_SUCCESS');
        } else {
            return response()->json([])
                ->setStatusCode(400, 'SHOW_ERROR');
        }

    }

    /**
     * Update the team.
     *
     * @param Request $request
     * @param Model   $team
     *
     * @return json
     */
    public function update(TeamUserApiRequest $request, Team $team)
    {
        try {

            $attributes = $request->all();

            $team->update($attributes);
            $team         = $team->presenter();
            $team['code'] = 2005;

            return response()->json($team)
                ->setStatusCode(201, 'UPDATE_SUCCESS');

        } catch (Exception $e) {

            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 4005,
            ])->setStatusCode(400, 'UPDATE_ERROR');

        }

    }

    /**
     * Remove the team.
     *
     * @param Request $request
     * @param Model   $team
     *
     * @return json
     */
    public function destroy(TeamUserApiRequest $request, Team $team)
    {

        try {

            $t = $team->delete();

            return response()->json([
                'message' => trans('messages.success.delete', ['Module' => trans('team::team.name')]),
                'code'    => 2006,
            ])->setStatusCode(202, 'DESTROY_SUCCESS');

        } catch (Exception $e) {

            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 4006,
            ])->setStatusCode(400, 'DESTROY_ERROR');
        }

    }

}
