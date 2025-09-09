<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medications')->insert(['name' => 'Aspirin', 'contraindication' => 'Yes', 'medication_interaction' => 'Acalabrutinib']);
        DB::table('medications')->insert(['name' => 'Chlorphenamine', 'contraindication' => 'Yes', 'medication_interaction' => 'Clozapine']);
        DB::table('medications')->insert(['name' => 'Codeine', 'contraindication' => 'Yes', 'medication_interaction' => 'Buprenorphine']);
        DB::table('medications')->insert(['name' => 'Esomeprazole', 'contraindication' => 'Yes', 'medication_interaction' => 'Atazanavir']);
        DB::table('medications')->insert(['name' => 'Hyoscine', 'contraindication' => 'Yes', 'medication_interaction' => 'Levodopa']);
        DB::table('medications')->insert(['name' => 'Ibuprofen', 'contraindication' => 'Yes', 'medication_interaction' => 'Acenocoumarol']);
        DB::table('medications')->insert(['name' => 'Loperamide', 'contraindication' => 'Yes', 'medication_interaction' => 'Dronedarone']);
        DB::table('medications')->insert(['name' => 'Naproxen', 'contraindication' => 'Yes', 'medication_interaction' => 'Alprostadil']);
        DB::table('medications')->insert(['name' => 'Paracetamol', 'contraindication' => 'Yes', 'medication_interaction' => 'Alcohol']);
        DB::table('medications')->insert(['name' => 'Senna', 'contraindication' => 'No', 'medication_interaction' => '']);
    }
}
