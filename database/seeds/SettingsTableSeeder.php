<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'key' => 'phone_number',
            'value' => '16314551401'
        ]);
        DB::table('settings')->insert([
            'key' => 'company_email',
            'value' => 'booking@YachtHampton.com'
        ]);
        DB::table('settings')->insert([
            'key' => 'top_text',
            'value' => 'For Faster Response CLICK HERE!'
        ]);
        DB::table('settings')->insert([
            'key' => 'company_address',
            'value' => '51 Division St. Unit 201 Sag Harbor, NY 11963'
        ]);
        DB::table('settings')->insert([
            'key' => 'sl_fb',
            'value' => 'https://www.facebook.com/yachthampton'
        ]);
        DB::table('settings')->insert([
            'key' => 'sl_twitter',
            'value' => '#'
        ]);
        DB::table('settings')->insert([
            'key' => 'sl_ta',
            'value' => '#'
        ]);
    }
}
