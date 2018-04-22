<?php

use Illuminate\Database\Seeder;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'admin',
        ];

        \App\User::create($array);
    }
}
