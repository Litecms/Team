<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for team in team package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  team module in team package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Team',
    'names'         => 'Teams',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Teams',
        'sub'   => 'Teams',
        'list'  => 'List of teams',
        'edit'  => 'Edit team',
        'create'    => 'Create new team'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'name'                       => 'Please enter name',
        'designation'                => 'Please enter designation',
        'description'                => 'Please enter description',
        'image'                      => 'Please enter image',
        'link'                       => 'Please enter link',
        'user_id'                    => 'Please enter user id',
        'user_type'                  => 'Please enter user type',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
        'deleted_at'                 => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'name'                       => 'Name',
        'designation'                => 'Designation',
        'description'                => 'Description',
        'image'                      => 'Image',
        'link'                       => 'Link',
        'user_id'                    => 'User id',
        'user_type'                  => 'User type',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'name'                       => ['name' => 'Name', 'data-column' => 1, 'checked'],
        'designation'                => ['name' => 'Designation', 'data-column' => 2, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Teams',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
