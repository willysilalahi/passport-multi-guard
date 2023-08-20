<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Sintia',
                'email' => 'sintia@del.com',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Nemnem',
                'email' => 'nemnem@del.com',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Niver',
                'email' => 'niver@del.com',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Agnes',
                'email' => 'agnes@del.com',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Esphi',
                'email' => 'esphi@del.com',
                'password' => bcrypt('12345')
            ]
        ]);
    }
}
