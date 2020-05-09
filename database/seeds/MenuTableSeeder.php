<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('all_menus')->insert([
            'title' => 'Top Navbar',
            'position' => 'top-navbar'
        ]);
        DB::table('all_menus')->insert([
            'title' => 'Footer Links',
            'position' => 'footer'
        ]);
        DB::table('menus')->insert([
            'menu_id' => 1,
            'route_id' => 1,
            'sn_no' => 1,
        ]);
        DB::table('menus')->insert([
            'menu_id' => 1,
            'route_id' => 2,
            'sn_no' => 2,
        ]);
        DB::table('menus')->insert([
            'menu_id' => 1,
            'route_id' => 3,
            'sn_no' => 3,
        ]);
        DB::table('menus')->insert([
            'menu_id' => 1,
            'route_id' => 4,
            'sn_no' => 1,
            'parent_route_id' => 2
        ]);
        DB::table('menus')->insert([
            'menu_id' => 1,
            'route_id' => 5,
            'sn_no' => 2,
            'parent_route_id' => 2
        ]);
        DB::table('menus')->insert([
            'menu_id' => 1,
            'route_id' => 6,
            'sn_no' => 3,
            'parent_route_id' => 2
        ]);
        DB::table('menus')->insert([
            'menu_id' => 1,
            'route_id' => 7,
            'sn_no' => 4,
            'parent_route_id' => 2
        ]);
    }
}
