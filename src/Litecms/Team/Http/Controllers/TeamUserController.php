<?php

namespace Litecms\Team\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Form;
use Litecms\Team\Http\Requests\TeamUserRequest;
use Litecms\Team\Interfaces\TeamRepositoryInterface;
use Litecms\Team\Models\Team;

class TeamUserController extends BaseController
{   
    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'web';

    /**
     * The home page route of user.
     *
     * @var string
     */
    protected $home = 'home';
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
        $this->middleware('auth:web');
        $this->middleware('auth.active:web');
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(TeamUserRequest $request)
    {
        $this->repository->pushCriteria(new \Litecms\Team\Repositories\Criteria\TeamUserCriteria());
        $teams = $this->repository->scopeQuery(function ($query) {
            return $query->orderBy('id', 'DESC');
        })->paginate();

        $this->theme->prependTitle(trans('team::team.names') . ' :: ');

        return $this->theme->of('team::user.team.index', compact('teams'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param Team $team
     *
     * @return Response
     */
    public function show(TeamUserRequest $request, Team $team)
    {
        Form::populate($team);

        return $this->theme->of('team::user.team.show', compact('team'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(TeamUserRequest $request)
    {

        $team = $this->repository->newInstance([]);
        Form::populate($team);

        return $this->theme->of('team::user.team.create', compact('team'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(TeamUserRequest $request)
    {
        try {
            $attributes            = $request->all();
            $attributes['user_id'] = user_id();
            $team                  = $this->repository->create($attributes);

            return redirect(trans_url('/user/team/team'))
                ->with('message', trans('messages.success.created', ['Module' => trans('team::team.name')]))
                ->with('code', 201);

        } catch (Exception $e) {
            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Team $team
     *
     * @return Response
     */
    public function edit(TeamUserRequest $request, Team $team)
    {

        Form::populate($team);

        return $this->theme->of('team::user.team.edit', compact('team'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param Team $team
     *
     * @return Response
     */
    public function update(TeamUserRequest $request, Team $team)
    {
        try {
            $this->repository->update($request->all(), $team->getRouteKey());

            return redirect(trans_url('/user/team/team'))
                ->with('message', trans('messages.success.updated', ['Module' => trans('team::team.name')]))
                ->with('code', 204);

        } catch (Exception $e) {
            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);
        }
    }

    /**
     * Remove the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy(TeamUserRequest $request, Team $team)
    {
        try {
            $this->repository->delete($team->getRouteKey());
            return response()->json([
                'message'  => trans('messages.success.deleted', ['Module' => trans('team::team.name')]),
                'code'     => 202,
                'redirect' => trans_url('/user/team/team'),
            ], 202);

        } catch (Exception $e) {

            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);

        }
    }
}
