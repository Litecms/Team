<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('teams')->insert([
            [
                'user_id'              => '1',
                'first_name'           => 'SUSAN  ',
                'last_name'            => 'PALMER',
                'slug'                 => '',
                'designation'          => 'MANAGER',
                'photo'                => '{"folder":"\\/uploads\\/teams\\/2016\\/07\\/20\\/064844868\\/photo\\/","file":"team-2.png","caption":"Team 2","time":"2016-07-20 06:48:49","efolder":"teams\\/Qgg5CvhjcknyEo\\/photo"}',
                'upload_folder'        => '',
                'description'          => '',
                'most_valuable_person' => 'Yes',
                'facebook'             => '',
                'google_plus'          => '',
                'instagram'            => '',
                'tumblr'               => '',
                'gmail'                => 'Susan@ren.com',
                'behance'              => '',
                'twitter'              => '',
                'status'               => '',
                'created_at'           => '2016-07-20 12:18:51',
                'updated_at'           => '2016-07-20 06:48:51',
                'deleted_at'           => null,
            ],
            [
                'user_id'              => '1',
                'first_name'           => 'SHIRLY  ',
                'last_name'            => 'MENDOZA',
                'slug'                 => '-2',
                'designation'          => 'SUPPORT',
                'photo'                => '{"folder":"\\/uploads\\/teams\\/2016\\/07\\/20\\/064859646\\/photo\\/","file":"team-1.png","caption":"Team 1","time":"2016-07-20 06:49:03","efolder":"teams\\/BBBduJh6cdod66\\/photo"}',
                'upload_folder'        => '',
                'description'          => '',
                'most_valuable_person' => 'No',
                'facebook'             => '',
                'google_plus'          => '',
                'instagram'            => '',
                'tumblr'               => '',
                'gmail'                => 'shirly@ren.com',
                'behance'              => '',
                'twitter'              => '',
                'status'               => '',
                'created_at'           => '2016-07-20 12:19:05',
                'updated_at'           => '2016-07-20 06:49:05',
                'deleted_at'           => null,
            ],
            [
                'user_id'              => '1',
                'first_name'           => 'JOSEPH ',
                'last_name'            => ' DELGADO',
                'slug'                 => '-3',
                'designation'          => 'CO FOUNDER',
                'photo'                => '{"folder":"\\/uploads\\/teams\\/2016\\/07\\/20\\/065007256\\/photo\\/","file":"team-3.png","caption":"Team 3","time":"2016-07-20 06:50:11","efolder":"teams\\/EGGbIPhGcnldmo\\/photo"}',
                'upload_folder'        => '',
                'description'          => '',
                'most_valuable_person' => 'No',
                'facebook'             => '',
                'google_plus'          => '',
                'instagram'            => '',
                'tumblr'               => '',
                'gmail'                => 'joseph@ren.com',
                'behance'              => '',
                'twitter'              => '',
                'status'               => '',
                'created_at'           => '2016-07-20 12:20:13',
                'updated_at'           => '2016-07-20 06:50:13',
                'deleted_at'           => null,
            ],

        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'team.team.view',
                'name' => 'View Team',
            ],
            [
                'slug' => 'team.team.create',
                'name' => 'Create Team',
            ],
            [
                'slug' => 'team.team.edit',
                'name' => 'Update Team',
            ],
            [
                'slug' => 'team.team.delete',
                'name' => 'Delete Team',
            ],
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/team/team',
                'name'        => 'Team',
                'description' => null,
                'icon'        => 'fa fa-users',
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'teams',
                'name'        => 'Team',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
        [
        'key'      => 'team.team.key',
        'name'     => 'Some name',
        'value'    => 'Some value',
        'type'     => 'Default',
        ],
         */
        ]);
    }
}
