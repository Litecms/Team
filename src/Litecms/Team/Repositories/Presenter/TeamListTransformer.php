<?php

namespace Litecms\Team\Repositories\Presenter;

use League\Fractal\TransformerAbstract;

class TeamListTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Team\Models\Team $team)
    {
        return [
            'id'                   => $team->getRouteKey(),
            'first_name'           => $team->first_name,
            'last_name'            => $team->last_name,
            'designation'          => $team->designation,
            'photo'                => $team->photo,
            'description'          => $team->description,
            'most_valuable_person' => $team->most_valuable_person,
            'facebook'             => $team->facebook,
            'tumblr'               => $team->tumblr,
            'gmail'                => $team->gmail,
            'behance'              => $team->behance,
            'twitter'              => $team->twitter,
            'status'               => $team->status,
        ];
    }
}
