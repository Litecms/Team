<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.team.team.model.table'))->insert([
            ['id' => '1', 'name' => 'ANTHONY CASALENA', 'designation' => 'FOUNDER & CHIEF EXECUTIVE OFFICER', 'description' => 'Anthony Casalena is the Founder and CEO of Squarespace, which he started from his dorm room in 2003. During the company’s early years, Anthony acted as the sole engineer, designer, and support representative for the entire Squarespace platform. In addition to running the company and setting overall product strategy, he remains actively involved in many departments of the company that he had previously run himself. Anthony holds a Bachelor of Science in Computer Science from the University of Maryland.', 'image' => '[{"title":"Anthony casalena 300w","caption":"Anthony casalena 300w","url":"Anthony casalena 300w","desc":null,"folder":"2018\\/10\\/10\\/061652785\\/image","time":"2018-10-10 06:17:34","path":"team\\/team\\/2018\\/10\\/10\\/061652785\\/image\\/anthony-casalena-300w.jpg","file":"anthony-casalena-300w.jpg"}]', 'link' => '{"ti-twitter-alt":"https:\\/\\/twitter.com\\/acasalena","ti-linkedin":"https:\\/\\/twitter.com\\/acasalena","ti-facebook":"https:\\/\\/twitter.com\\/acasalena","ti-instagram":"https:\\/\\/twitter.com\\/acasalena"}', 'slug' => 'anthony-casalena', 'user_id' => '1', 'user_type' => 'App\\User', 'created_at' => '2018-10-10 06:19:40', 'updated_at' => '2018-10-10 06:19:40', 'deleted_at' => null],
            ['id' => '2', 'name' => 'NICOLE ANASENES', 'designation' => 'CHIEF FINANCIAL OFFICER & CHIEF OPERATING OFFICER', 'description' => 'Nicole brings to Squarespace 20 years of experience building new businesses and transforming legacy business models. Most recently, she served as Chief Financial Officer at Infor, one of the largest providers of enterprise applications in the world. Prior to Infor, Nicole spent 17 years in various operational and financial leadership positions within IBM’s Cloud Computing, Global Services, and Software organizations. She holds an MBA from The Wharton School of the University of Pennsylvania and a Bachelor’s degree from New York University.', 'image' => '[{"title":"Nicole anasenes 300w","caption":"Nicole anasenes 300w","url":"Nicole anasenes 300w","desc":null,"folder":"2018\\/10\\/10\\/061945981\\/image","time":"2018-10-10 06:20:18","path":"team\\/team\\/2018\\/10\\/10\\/061945981\\/image\\/nicole-anasenes-300w.jpg","file":"nicole-anasenes-300w.jpg"}]', 'link' => '{"ti-twitter-alt":"https:\\/\\/twitter.com\\/acasalena","ti-linkedin":"https:\\/\\/twitter.com\\/acasalena","ti-facebook":"https:\\/\\/twitter.com\\/acasalena","ti-instagram":"https:\\/\\/twitter.com\\/acasalena"}', 'slug' => 'nicole-anasenes', 'user_id' => '1', 'user_type' => 'App\\User', 'created_at' => '2018-10-10 06:20:45', 'updated_at' => '2018-10-10 06:20:45', 'deleted_at' => null],
            ['id' => '3', 'name' => 'ANDREW BARTHOLOMEW', 'designation' => 'SENIOR VICE PRESIDENT, STRATEGY', 'description' => 'As the leader of Squarespace’s Strategy division, Andrew is responsible for developing the analytical frameworks that shape the company’s business. Since joining Squarespace, he has grown the division into a team that covers everything from business strategy and customer insights to analytics and data science. Prior to Squarespace, Andrew worked at the New York County District Attorney’s Office helping to shape the office’s new data-driven approach to fighting crime. Andrew graduated from Yale, where he majored in Psychology and was an editor at the Yale Daily News.', 'image' => '[{"title":"Andrew bartholomew 300w","caption":"Andrew bartholomew 300w","url":"Andrew bartholomew 300w","desc":null,"folder":"2018\\/10\\/10\\/062242580\\/image","time":"2018-10-10 06:23:19","path":"team\\/team\\/2018\\/10\\/10\\/062242580\\/image\\/andrew-bartholomew-300w.jpg","file":"andrew-bartholomew-300w.jpg"}]', 'link' => '{"ti-twitter-alt":"https:\\/\\/twitter.com\\/acasalena","ti-linkedin":"https:\\/\\/twitter.com\\/acasalena","ti-facebook":"https:\\/\\/twitter.com\\/acasalena","ti-instagram":"https:\\/\\/twitter.com\\/acasalena"}', 'slug' => 'andrew-bartholomew', 'user_id' => '1', 'user_type' => 'App\\User', 'created_at' => '2018-10-10 06:23:31', 'updated_at' => '2018-10-10 06:23:31', 'deleted_at' => null],
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
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/team/team',
                'name'        => 'Team',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'team',
                'name'        => 'Team',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
        [
        'pacakge'   => 'Team',
        'module'    => 'Team',
        'user_type' => null,
        'user_id'   => null,
        'key'       => 'team.team.key',
        'name'      => 'Some name',
        'value'     => 'Some value',
        'type'      => 'Default',
        'control'   => 'text',
        ],
         */
        ]);
    }
}
