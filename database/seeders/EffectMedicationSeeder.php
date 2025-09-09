<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EffectMedicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('effect_medication')->insert(['medication_id' => '1', 'effect_id' => '1']);
        DB::table('effect_medication')->insert(['medication_id' => '1', 'effect_id' => '2']);
        DB::table('effect_medication')->insert(['medication_id' => '1', 'effect_id' => '3']);

        DB::table('effect_medication')->insert(['medication_id' => '2', 'effect_id' => '4']);
        DB::table('effect_medication')->insert(['medication_id' => '2', 'effect_id' => '5']);
        DB::table('effect_medication')->insert(['medication_id' => '2', 'effect_id' => '6']);

        DB::table('effect_medication')->insert(['medication_id' => '3', 'effect_id' => '7']);
        DB::table('effect_medication')->insert(['medication_id' => '3', 'effect_id' => '8']);
        DB::table('effect_medication')->insert(['medication_id' => '3', 'effect_id' => '9']);

        DB::table('effect_medication')->insert(['medication_id' => '4', 'effect_id' => '10']);
        DB::table('effect_medication')->insert(['medication_id' => '4', 'effect_id' => '9']);
        DB::table('effect_medication')->insert(['medication_id' => '4', 'effect_id' => '11']);

        DB::table('effect_medication')->insert(['medication_id' => '5', 'effect_id' => '12']);
        DB::table('effect_medication')->insert(['medication_id' => '5', 'effect_id' => '8']);
        DB::table('effect_medication')->insert(['medication_id' => '5', 'effect_id' => '13']);

        DB::table('effect_medication')->insert(['medication_id' => '6', 'effect_id' => '14']);
        DB::table('effect_medication')->insert(['medication_id' => '6', 'effect_id' => '15']);
        DB::table('effect_medication')->insert(['medication_id' => '6', 'effect_id' => '13']);

        DB::table('effect_medication')->insert(['medication_id' => '7', 'effect_id' => '16']);
        DB::table('effect_medication')->insert(['medication_id' => '7', 'effect_id' => '17']);
        DB::table('effect_medication')->insert(['medication_id' => '7', 'effect_id' => '12']);

        DB::table('effect_medication')->insert(['medication_id' => '8', 'effect_id' => '18']);
        DB::table('effect_medication')->insert(['medication_id' => '8', 'effect_id' => '19']);
        DB::table('effect_medication')->insert(['medication_id' => '8', 'effect_id' => '13']);

        DB::table('effect_medication')->insert(['medication_id' => '9', 'effect_id' => '20']);
        DB::table('effect_medication')->insert(['medication_id' => '9', 'effect_id' => '21']);
        DB::table('effect_medication')->insert(['medication_id' => '9', 'effect_id' => '12']);

        DB::table('effect_medication')->insert(['medication_id' => '10', 'effect_id' => '11']);
        DB::table('effect_medication')->insert(['medication_id' => '10', 'effect_id' => '22']);
        DB::table('effect_medication')->insert(['medication_id' => '10', 'effect_id' => '23']);
    }
}
