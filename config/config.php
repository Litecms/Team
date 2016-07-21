<?php

return [

    /**
     * Provider.
     */
    'provider' => 'lavalite',

    /*
     * Package.
     */
    'package'  => 'team',

    /*
     * Modules.
     */
    'modules'  => ['team'],

    'team'     => [
        'model'         => 'Litecms\Team\Models\Team',
        'table'         => 'teams',
        'presenter'     => \Litecms\Team\Repositories\Presenter\TeamItemPresenter::class,
        'hidden'        => [],
        'visible'       => [],
        'guarded'       => ['*'],
        'slugs'         => ['slug' => 'name'],
        'dates'         => ['deleted_at'],
        'appends'       => [],
        'fillable'      => ['user_id', 'first_name', 'last_name', 'designation', 'photo', 'description', 'most_valuable_person', 'facebook', 'google_plus', 'instagram', 'tumblr', 'gmail', 'behance', 'twitter', 'status', 'upload_folder'],
        'translate'     => [],

        'upload-folder' => '/uploads/team/team',
        'uploads'       => [
            'single'   => ['photo'],
            'multiple' => [],
        ],
        'casts'         => ['photo' => 'array',
        ],
        'revision'      => [],
        'perPage'       => '20',
        'search'        => [
            'first_name' => 'like',
            'last_name',
            'status',
        ],
    ],
];
