<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_check = User::all();
        if($user_check->isEmpty()){
            $faker = Faker::create();
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => 'clanlord.ikot@gmail.com',
                'phone' => $faker->phoneNumber,
                'password' => bcrypt('123456'),
                'role' => 'admin',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
