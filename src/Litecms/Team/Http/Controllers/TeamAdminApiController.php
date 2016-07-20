<?php

namespace Litecms\Team\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Litecms\Team\Http\Requests\TeamAdminApiRequest;
use Litecms\Team\Interfaces\TeamRepositoryInterface;
use Litecms\Team\Models\Team;

/**
 * Admin API controller class.
 */
class TeamAdminApiController extends BaseController
{
    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'admin.api';
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
        $this->middleware('jwt.auth:admin.api');
        $this->setupTheme(config('theme.themes.admin.theme'), config('theme.themes.admin.layout'));
        parent::__construct();
    }

    /**
     * Display a list of team.
     *
     * @return json
     */
    public function index(TeamAdminApiRequest $request)
    {
        $teams = $this->repository
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
    public function show(TeamAdminApiRequest $request, Team $team)
    {
        $team         = $team->presenter();
        $team['code'] = 2001;
        return response()->json($team)
            ->setStatusCode(200, 'SHOW_SUCCESS');

    }

    /**
     * Show the form for creating a new team.
     *
     * @param Request $request
     *
     * @return json
     */
    public function create(TeamAdminApiRequest $request, Team $team)
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
    public function store(TeamAdminApiRequest $request)
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
    public function edit(TeamAdminApiRequest $request, Team $team)
    {
        $team         = $team->presenter();
        $team['code'] = 2003;
        return response()->json($team)
            ->setStatusCode(200, 'EDIT_SUCCESS');
    }

    /**
     * Update the team.
     *
     * @param Request $request
     * @param Model   $team
     *
     * @return json
     */
    public function update(TeamAdminApiRequest $request, Team $team)
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
    public function destroy(TeamAdminApiRequest $request, Team $team)
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
