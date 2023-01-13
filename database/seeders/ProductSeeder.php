<?php

namespace Database\Seeders;

use App\Models\product;
use App\Models\sections;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Factory::create();

        foreach(range(1,50) as $index){

            $sectionId = sections::all()->pluck('id');

            product::create([
                'product_name'=> $faker->name(),
                'description'=>$faker->sentence(),
                'section_id'=>$faker->randomElement($sectionId),
            ]);
        }
    }
}
