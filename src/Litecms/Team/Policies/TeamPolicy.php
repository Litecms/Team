<?php

namespace Litecms\Team\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Litecms\Team\Models\Team;

class TeamPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can view the team.
     *
     * @param User $user
     * @param Team $team
     *
     * @return bool
     */
    public function view(User $user, Team $team)
    {

        if ($user->canDo('team.team.view') && $user->is('admin')) {
            return true;
        }

        return $user->id === $team->user_id;
    }

    /**
     * Determine if the given user can create a team.
     *
     * @param User $user
     * @param Team $team
     *
     * @return bool
     */
    public function create(User $user)
    {
        return $user->canDo('team.team.create');
    }

    /**
     * Determine if the given user can update the given team.
     *
     * @param User $user
     * @param Team $team
     *
     * @return bool
     */
    public function update(User $user, Team $team)
    {

        if ($user->canDo('team.team.update') && $user->is('admin')) {
            return true;
        }

        return $user->id === $team->user_id;
    }

    /**
     * Determine if the given user can delete the given team.
     *
     * @param User $user
     * @param Team $team
     *
     * @return bool
     */
    public function destroy(User $user, Team $team)
    {

        if ($user->canDo('team.team.delete') && $user->is('admin')) {
            return true;
        }

        return $user->id === $team->user_id;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {

        if ($user->isSuperUser()) {
            return true;
        }

    }

}
