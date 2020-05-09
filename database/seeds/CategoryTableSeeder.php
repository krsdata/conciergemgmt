<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat1 = DB::table('categories')->insertGetId([
            'title' => 'Popular Boats'
        ]);
        if($cat1){
            DB::table('routes')->insert([
                'pbc_id' => $cat1,
                'slug' => 'popular-boats',
                'type' => 'category'
            ]);
        }
        $cat2 = DB::table('categories')->insertGetId([
            'title' => 'Yachts For Groups>12'
        ]);
        if($cat2){
            DB::table('routes')->insert([
                'pbc_id' => $cat2,
                'slug' => 'group-12',
                'type' => 'category'
            ]);
        }
        $cat3 = DB::table('categories')->insertGetId([
            'title' => 'Luxury Boats'
        ]);
        if($cat3){
            DB::table('routes')->insert([
                'pbc_id' => $cat3,
                'slug' => 'luxury-boats',
                'type' => 'category'
            ]);
        }
        $cat4 = DB::table('categories')->insertGetId([
            'title' => 'Sailboats'
        ]);
        if($cat4){
            DB::table('routes')->insert([
                'pbc_id' => $cat4,
                'slug' => 'sailboats',
                'type' => 'category'
            ]);
        }
    }
}
