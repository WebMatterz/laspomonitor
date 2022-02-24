<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Khaleel',
            'email' => 'khaleelrahmon@gmail.com',
            'password' => bcrypt('password'),
            'remember_token' => null,
        ]);
    }
}
