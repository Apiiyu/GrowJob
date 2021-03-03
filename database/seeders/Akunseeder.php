<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class Akunseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin'),
                'level' => 'admin'
            ],
            [
                'username' => 'user',
                'name' => 'user',
                'email' => 'user@example.com',
                'password' => bcrypt('user'),
                'level' => 'user'
            ],
            ];
        foreach ($user as $dataUser => $value){
            User::create($value);
        }
    }
}
