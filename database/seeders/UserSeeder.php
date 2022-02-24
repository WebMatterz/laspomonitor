<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('users')->insert([
            'username' => 'Dynamite',
            'firstname' => 'Khaleel',
            'lastname' => 'Adedeji',
            'email' => 'khaleelrahmon@gmail.com',
            'designationID' => 'Junior',
            'phone_no' => '07033716203',
            'password' => bcrypt('Dynamite10'),
            'remember_token' => null,
        ]);

    }
}
