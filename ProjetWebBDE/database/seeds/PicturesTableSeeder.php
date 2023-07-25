<?php

use App\Picture;
use Illuminate\Database\Seeder;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Picture::truncate();

        $faker = \Faker\Factory::create();

        for($i=0; $i<20; $i++){
            Picture::create([
                'url' => $faker->imageUrl(640,480)
            ]);
        }
    }
}
