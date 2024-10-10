<?php

namespace Database\Seeders;

use App\Models\TipoPontoTuristico;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            AutorSeeder::class,
            CadernoSeeder::class,
            TipoNegocioSeeder::class,
            TipoPontoTuristico::class,
            EstadoSeeder::class,
            CidadeSeeder::class,
            EnderecoSeeder::class,
            NegocioSeeder::class,
            PontoTuristicoSeeder::class,
            NoticiaSeeder::class

        ]);
    }
}
