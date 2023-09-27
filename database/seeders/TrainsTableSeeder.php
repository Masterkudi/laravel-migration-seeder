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
            
            $train->azienda = $faker->azienda();
            $train->stazione_partenza = $faker->stazione_di_partenza();
            $train->stazione_arrivo = $faker->stazione_di_arrivo();
            $train->orario_partenza = $faker->orario_di_partenza();
            $train->orario_arrivo = $faker->orario_di_arrivo();
            $train->codice_treno = $faker->codice_treno(10000, 99999);
            $train->numero_carrozze = $faker->numero_carrozze(1,12);
            $train->in_orario = $faker->in_orario(0,1);
            $train->cancellato = $faker->cancellato(0,1);
            
            $train->save();
    }
}
}