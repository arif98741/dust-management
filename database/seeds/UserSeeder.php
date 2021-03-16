<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * @return array
     */
    public function run()
    {
        DB::table('users')->insert([
            //'name' => Fa,
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
        return [

        ];
    }
}
