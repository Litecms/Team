<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'litecms',

    /*
     * Package.
     */
    'package'   => 'team',

    /*
     * Modules.
     */
    'modules'   => ['team'],

    
    'team'       => [
        'model' => [
            'model'                 => \Litecms\Team\Models\Team::class,
            'table'                 => 'team',
            'presenter'             => \Litecms\Team\Repositories\Presenter\TeamPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'created_at', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'name',  'designation',  'description',  'image',  'link', 'slug', 'user_id',  'user_type',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'team/team',
            'uploads'               => [
            
                    'image' => [
                        'count' => 1,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            
            ],

            'casts'                 => [
            
                'image'    => 'array',
                'file'      => 'array',
                'link'      => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'Team',
            'module'    => 'Team',
        ],

    ],
];
