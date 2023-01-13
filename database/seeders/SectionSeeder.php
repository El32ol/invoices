<?php

namespace Database\Seeders;

use App\Models\sections;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Factory::create();
    //    for ($i=0; $i <3 ; $i++) { 
        # code...
        foreach (range(1,10) as $index){
        sections::create([
            'section_name'=>$faker->name(10),
            'description'=>$faker->text(10),
            'created_by'=>$faker->name(10),
        ]);
    }

    }
}
