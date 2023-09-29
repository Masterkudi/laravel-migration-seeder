<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Train;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $train = new Train();

            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->dateTime();
            $train->orario_di_arrivo = $faker->dateTime();
            $train->codice_treno = $faker->numberBetween(100000, 999999);
            $train->numero_carrozze = $faker->numberBetween(1, 25);
            $train->in_orario = $faker->numberBetween(0, 1);
            $train->cancellato = $faker->numberBetween(0, 1);

            $train->save();
        }
    }
}
