<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Profession;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Facade;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {  
            Profession::create([
                'title' => 'Desarrollador back-end',
            ]);
            
            Profession::create([
                'title' => 'Desarrollador front-end',
            ]);
            
            Profession::create([
                'title' => 'Diseñador web',
            ]);

            Factory::factoryForModel(Profession::class)->times(17)->create();
        }
    }
}
