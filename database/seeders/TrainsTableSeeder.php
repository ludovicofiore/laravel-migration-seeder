<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<50; $i++){

            $new_train = new Train();
            $new_train->company = $faker-> randomElements(['Trenitalia', 'Italo', 'Trenord'])[0];
            $new_train->departure_station = $faker-> city;
            $new_train->arrival_station = $faker-> city;
            // $new_train->departure_time = $faker-> time('H_i_s');
            // $new_train->arrival_time = $faker-> time('H_i_s');
            $new_train->train_code = $faker->text(5);
            $new_train->train_carriage = $faker->numberBetween(2, 10);
            $new_train->on_time = $faker->numberBetween(0, 1);
            $new_train->deleted = $faker->numberBetween(0, 1);
            // dump($new_train);
            $new_train-> save();
        }
    }
}
