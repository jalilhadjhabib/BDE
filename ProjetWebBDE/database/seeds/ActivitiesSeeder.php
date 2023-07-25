<?php

use App\Activitie;
use Illuminate\Database\Seeder;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Activitie::truncate();

        $faker = \Faker\Factory::create();

        for($i=0; $i<20; $i++){
            Activitie::create([
                'name' => $faker->domainWord,
                'description' => $faker->realText(150),
                'recurrent' => $faker->numberBetween(0,1),
                'price' => $faker->numberBetween(0,100),
                'date' => $faker->date()
            ]);
        }
    }
}
