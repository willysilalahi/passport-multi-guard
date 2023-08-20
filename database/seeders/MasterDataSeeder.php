<?php

namespace Database\Seeders;

use App\Models\MemberModel;
use App\Models\TrainerModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MemberModel::truncate();
        MemberModel::insert([
            [
                'name' => 'Musliadi Sembiring',
                'email' => 'musliadi@gym.com',
                'phone' => '082167678787',
                'password' => bcrypt('secret'),
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ratione, at eaque porro a distinctio.',
            ],
            [
                'name' => 'Hari Saragih',
                'email' => 'hari@gym.com',
                'phone' => '082167678787',
                'password' => bcrypt('secret'),
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ratione, at eaque porro a distinctio.',
            ]
        ]);


        TrainerModel::truncate();
        TrainerModel::insert([
            [
                'name' => 'Edwin Halawa',
                'email' => 'edwin@gym.com',
                'phone' => '082167678787',
                'password' => bcrypt('123456'),
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ratione, at eaque porro a distinctio.',
            ],
            [
                'name' => 'Anthony Zebua',
                'email' => 'anthony@gym.com',
                'phone' => '082167678787',
                'password' => bcrypt('123456'),
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ratione, at eaque porro a distinctio.',
            ]
        ]);
    }
}
