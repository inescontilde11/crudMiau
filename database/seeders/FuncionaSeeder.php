<?php

namespace Database\Seeders;

use App\Models\funciona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuncionaSeeder extends Seeder
{
    public function run(): void {
    Funciona::factory()->count(20)->create();
        //
    }
}
