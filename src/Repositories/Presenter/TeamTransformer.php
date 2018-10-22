<?php

namespace Litecms\Team\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class TeamTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Team\Models\Team $team)
    {
        return [
            'id'                => $team->getRouteKey(),
            'key'               => [
                'public'    => $team->getPublicKey(),
                'route'     => $team->getRouteKey(),
            ], 
            'name'              => $team->name,
            'designation'       => $team->designation,
            'description'       => $team->description,
            'image'             => $team->image,
            'link'              => $team->link,
            'user_id'           => $team->user_id,
            'user_type'         => $team->user_type,
            'created_at'        => $team->created_at,
            'updated_at'        => $team->updated_at,
            'deleted_at'        => $team->deleted_at,
            'url'               => [
                'public'    => trans_url('team/'.$team->getPublicKey()),
                'user'      => guard_url('team/team/'.$team->getRouteKey()),
            ], 
            'status'            => trans('app.'.$team->status),
            'created_at'        => format_date($team->created_at),
            'updated_at'        => format_date($team->updated_at),
        ];
    }
}