<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'              => 'Admin',
                'email'             => 'admin@admin.com',
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password'          => bcrypt('password'),
                'created_at'        => date('Y-m-d H:i:s')
            ]
        ];
        User::insert($data);
    }
}
