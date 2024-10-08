<?php

namespace Database\Seeders;

use App\Models\PemainMU;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainMUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            PemainMU::create([
                'nama_pemain'      => fake()->sentence     (3           ),
                'no_punggung'    => fake()->numberBetween         (     1,12      ),
                'posisi'      => fake()->name(),
            ]);
        }
    }
}
