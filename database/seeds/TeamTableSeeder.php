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
                'photo'                => '{"folder":"teams\\/2016\\/07\\/21\\/124718221\\/photo","file":"team-1.png","caption":"Team 1","time":"2016-07-21 12:47:24"}',
                'upload_folder'        => 'teams/2016/07/21/124718221',
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
                'created_at'           => '2016-07-21 18:17:25',
                'updated_at'           => '2016-07-21 12:47:25',
                'deleted_at'           => null,
            ],
            [
                'user_id'              => '1',
                'first_name'           => 'SHIRLY  ',
                'last_name'            => 'MENDOZA',
                'slug'                 => '-2',
                'designation'          => 'SUPPORT',
                'photo'                => '{"folder":"teams\\/2016\\/07\\/21\\/124707365\\/photo","file":"team-2.png","caption":"Team 2","time":"2016-07-21 12:47:12"}',
                'upload_folder'        => 'teams/2016/07/21/124707365',
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
                'created_at'           => '2016-07-21 18:17:13',
                'updated_at'           => '2016-07-21 12:47:13',
                'deleted_at'           => null,
            ],
            [
                'user_id'              => '1',
                'first_name'           => 'JOSEPH ',
                'last_name'            => ' DELGADO',
                'slug'                 => '-3',
                'designation'          => 'CO FOUNDER',
                'photo'                => '{"folder":"teams\\/2016\\/07\\/21\\/124649805\\/photo","file":"team-3.png","caption":"Team 3","time":"2016-07-21 12:46:55"}',
                'upload_folder'        => 'teams/2016/07/21/124649805',
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
                'created_at'           => '2016-07-21 18:16:56',
                'updated_at'           => '2016-07-21 12:46:56',
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
                'order'       => 230,
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
                'order'       => 230,
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
