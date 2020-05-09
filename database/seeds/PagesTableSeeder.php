<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = DB::table('pages')->insertGetId([
            'title' => 'Home',
            'content' => null,
        ]);
        if($home){
            DB::table('routes')->insert([
                'pbc_id' => $home,
                'slug' => '/',
                'type' => 'page'
            ]);
        }
        $boats = DB::table('pages')->insertGetId([
            'title' => 'Our Boats',
            'content' => null,
        ]);
        if($boats){
            DB::table('routes')->insert([
                'pbc_id' => $boats,
                'slug' => 'our-boats',
                'type' => 'page'
            ]);
        }
        $contact = DB::table('pages')->insertGetId([
            'title' => 'Contact Us',
            'content' => null,
        ]);
        if($contact){
            DB::table('routes')->insert([
                'pbc_id' => $contact,
                'slug' => 'contact-us',
                'type' => 'page'
            ]);
        }
    }
}
