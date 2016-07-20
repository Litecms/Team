<?php

namespace Litecms\Team\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Form;
use Litecms\Team\Http\Requests\TeamAdminRequest;
use Litecms\Team\Interfaces\TeamRepositoryInterface;
use Litecms\Team\Models\Team;

/**
 * Admin web controller class.
 */
class TeamAdminController extends BaseController
{

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    public $guard = 'admin.web';

    /**
     * The home page route of admin.
     *
     * @var string
     */
    public $home = 'admin';
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
        $this->middleware('web');
        $this->middleware('auth:admin.web');
        $this->setupTheme(config('theme.themes.admin.theme'), config('theme.themes.admin.layout'));
        parent::__construct();
    }

    /**
     * Display a list of team.
     *
     * @return Response
     */
    public function index(TeamAdminRequest $request)
    {
        $pageLimit = $request->input('pageLimit');

        if ($request->wantsJson()) {
            $teams = $this->repository
                ->setPresenter('\\Litecms\\Team\\Repositories\\Presenter\\TeamListPresenter')
                ->scopeQuery(function ($query) {
                    return $query->orderBy('id', 'DESC');
                })->paginate($pageLimit);

            $teams['recordsTotal']    = $teams['meta']['pagination']['total'];
            $teams['recordsFiltered'] = $teams['meta']['pagination']['total'];
            $teams['request']         = $request->all();
            return response()->json($teams, 200);

        }

        $this->theme->prependTitle(trans('team::team.names') . ' :: ');
        return $this->theme->of('team::admin.team.index')->render();
    }

    /**
     * Display team.
     *
     * @param Request $request
     * @param Model   $team
     *
     * @return Response
     */
    public function show(TeamAdminRequest $request, Team $team)
    {

        if (!$team->exists) {
            return response()->view('team::admin.team.new', compact('team'));
        }

        Form::populate($team);
        return response()->view('team::admin.team.show', compact('team'));
    }

    /**
     * Show the form for creating a new team.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(TeamAdminRequest $request)
    {

        $team = $this->repository->newInstance([]);

        Form::populate($team);

        return response()->view('team::admin.team.create', compact('team'));

    }

    /**
     * Create new team.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(TeamAdminRequest $request)
    {
        try {
            $attributes            = $request->all();
            $attributes['user_id'] = user_id('admin.web');
            $team                  = $this->repository->create($attributes);

            return response()->json([
                'message'  => trans('messages.success.updated', ['Module' => trans('team::team.name')]),
                'code'     => 204,
                'redirect' => trans_url('/admin/team/team/' . $team->getRouteKey()),
            ], 201);

        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 400,
            ], 400);
        }

    }

    /**
     * Show team for editing.
     *
     * @param Request $request
     * @param Model   $team
     *
     * @return Response
     */
    public function edit(TeamAdminRequest $request, Team $team)
    {
        Form::populate($team);
        return response()->view('team::admin.team.edit', compact('team'));
    }

    /**
     * Update the team.
     *
     * @param Request $request
     * @param Model   $team
     *
     * @return Response
     */
    public function update(TeamAdminRequest $request, Team $team)
    {
        try {

            $attributes = $request->all();

            $team->update($attributes);

            return response()->json([
                'message'  => trans('messages.success.updated', ['Module' => trans('team::team.name')]),
                'code'     => 204,
                'redirect' => trans_url('/admin/team/team/' . $team->getRouteKey()),
            ], 201);

        } catch (Exception $e) {

            return response()->json([
                'message'  => $e->getMessage(),
                'code'     => 400,
                'redirect' => trans_url('/admin/team/team/' . $team->getRouteKey()),
            ], 400);

        }

    }

    /**
     * Remove the team.
     *
     * @param Model   $team
     *
     * @return Response
     */
    public function destroy(TeamAdminRequest $request, Team $team)
    {

        try {

            $t = $team->delete();

            return response()->json([
                'message'  => trans('messages.success.deleted', ['Module' => trans('team::team.name')]),
                'code'     => 202,
                'redirect' => trans_url('/admin/team/team/0'),
            ], 202);

        } catch (Exception $e) {

            return response()->json([
                'message'  => $e->getMessage(),
                'code'     => 400,
                'redirect' => trans_url('/admin/team/team/' . $team->getRouteKey()),
            ], 400);
        }

    }

}
