<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profession;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $professionId = Profession::where('title', 'Desarrollador back-end')->value('id');

        $user = Factory::factoryForModel(User::class)->create([
            'name' => 'Cesar Calderon',
            'email' => 'CesarC@gmail.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId
        ]);

        $user = Factory::factoryForModel(User::class)->create([
            'profession_id' => $professionId
        ]);
        
        Factory::factoryForModel(User::class)->times(48)->create();
    }
}
