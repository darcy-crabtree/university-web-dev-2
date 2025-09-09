<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EffectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Aspirin
        DB::table('effects')->insert(['name' => 'Asthmatic Attack', 'description' => 'The most common symptoms are: Wheezing, Breathlessness, a tight chest and coughing.', 'url' => "https://www.nhs.uk/conditions/asthma/symptoms/"]);
        DB::table('effects')->insert(['name' => 'Branchospasm', 'description' => 'The most common symptoms are: Expiratory wheeze, prolonged expiration, increased inflation pressures, desaturation, hypercapnia, upsloping capnograph trace, silent chest.', 'url' => "https://www.bradfordhospitals.nhs.uk/wp-content/uploads/2019/06/3-4-Bronchospasm.pdf"]);
        DB::table('effects')->insert(['name' => 'Dyspepsia', 'description' => 'The most common symptoms are: Heartburn, feeling full and bloated, feeling sick, burping and farting and bringing up food or a bitter-tasting fluids into your mouth.', 'url' => "https://www.nhs.uk/conditions/indigestion/"]);
        
        //Chlorphenamine        
        DB::table('effects')->insert(['name' => 'Concentration Impaired', 'description' => 'Deteriorated mental capabilities (cognition)', 'url' => "https://www.cntw.nhs.uk/wp-content/uploads/2016/08/Mild-Cognitive-Impairment-LP-bloom.pdf"]);
        DB::table('effects')->insert(['name' => 'Coordination Abnormal', 'description' => 'The inability to coordinate movement', 'url' => "https://www.mountsinai.org/health-library/symptoms/movement-uncoordinated#:~:text=Uncoordinated%20movement%20is%20due%20to,of%20this%20condition%20is%20ataxia."]);
        DB::table('effects')->insert(['name' => 'Dizziness', 'description' => 'The most common symptoms include feeling: off-balance, giddy, lightheaded or faint and like you are spinning or things are you are spinning', 'url' => "https://www.nhs.uk/conditions/dizziness/"]);
       
        //Codeine
        DB::table('effects')->insert(['name' => 'Arrhythmias', 'description' => 'Symptoms can include: Heart palpitations, short of breath, lightheaded, dizzy or light you might faint, tired and chest pain or discomfort', 'url' => "https://www.nhs.uk/conditions/arrhythmia/"]);
        DB::table('effects')->insert(['name' => 'Confusion', 'description' => 'Symptoms can include: Not being able to think or speak clearly or quickly, not knowing where they are, struggling to pay attention or remember things and seeing or hearing things that are not there.', 'url' => "https://www.nhs.uk/conditions/confusion/"]);
        DB::table('effects')->insert(['name' => 'Constipation', 'description' => 'Symptoms often include: you have not had a poo at least 3 times during the last week or you are pooing less often than usual, the poo is unusually large or small and is dry, hard or lumpy, you are straining or in pain when you have a poo and you feel like you have not fully emptied your bowels', 'url' => "https://www.nhs.uk/conditions/constipation/"]);
        
        //Esomeprazole
        DB::table('effects')->insert(['name' => 'Abdominal pain', 'description' => 'Symptoms can include: Feeling bloated, farting a lot, feeling full and bloated after eating, heartburn, feeling sick, cannot poo, watery poo and vomitting', 'url' => "https://www.nhs.uk/conditions/stomach-ache/"]);
        //Constipation
        DB::table('effects')->insert(['name' => 'Diarrhoea', 'description' => 'Passing looser, watery or more frequent poo (stools) than is normal for you.', 'url' => "https://www.nhsinform.scot/illnesses-and-conditions/stomach-liver-and-gastrointestinal-tract/diarrhoea/"]);
        
        //Hyoscine
        DB::table('effects')->insert(['name' => 'Angioedema', 'description' => 'Symptoms include: a raised itchy rash on the face, hands or feet and genitals.', 'url' => "https://www.nhs.uk/conditions/angioedema/"]);
        //Confusion
        DB::table('effects')->insert(['name' => 'Dyspnoea', 'description' => 'Shortness of breath', 'url' => "https://www.nhs.uk/conditions/shortness-of-breath/"]);

        //Ibuprofen
        DB::table('effects')->insert(['name' => 'Abdominal pain', 'description' => 'Symptoms can include: Feeling bloated, farting a lot, feeling full and bloated after eating, heartburn, feeling sick, cannot poo, watery poo and vomitting', 'url' => "https://www.nhs.uk/conditions/stomach-ache/"]);
        DB::table('effects')->insert(['name' => 'Skin Reactions', 'description' => '', 'url' => ""]);
        //Dyspnoea

        //Loperamide
        DB::table('effects')->insert(['name' => 'Headache', 'description' => 'Headaches can last 30 minutes, several hours, or sometimes several days.', 'url' => "https://www.nhs.uk/conditions/headaches/"]);
        DB::table('effects')->insert(['name' => 'Nausea', 'description' => 'Feeling sick (nausea) is common and usually goes away on its own.', 'url' => "https://www.nhs.uk/conditions/feeling-sick-nausea/"]);
        //Angiodema
              
        //Naproxen
        DB::table('effects')->insert(['name' => 'Depression', 'description' => 'Symptoms can include: Continuous sadness or low mood, losing interest in things and losing motivation.', 'url' => "https://www.nhsinform.scot/illnesses-and-conditions/mental-health/depression/#symptoms-and-causes-of-depression"]);
        DB::table('effects')->insert(['name' => 'Dizziness', 'description' => 'The most common symptoms include feeling: off-balance, giddy, lightheaded or faint and like you are spinning or things are you are spinning', 'url' => "https://www.nhs.uk/conditions/dizziness/"]);
        //Dyspnoea

        //Paracetamol
        DB::table('effects')->insert(['name' => 'Hypotension', 'description' => 'Symptoms can include lightheadedness or dizziness, feeling sick and blurred vision.', 'url' => "https://www.nhs.uk/conditions/low-blood-pressure-hypotension/"]);
        DB::table('effects')->insert(['name' => 'Anorectal erythema', 'description' => 'You can often do simple things yourself to ease an itchy bottom (anus). Get medical help if the itching does not stop.', 'url' => "https://www.nhs.uk/conditions/itchy-anus/"]);
        //Angiodema

        //Senna
        //Diarrhoea
        DB::table('effects')->insert(['name' => 'Gastrointestinal Discomfort', 'description' => 'Most stomach aches are not anything serious and will go away after a few days.', 'url' => "https://www.nhs.uk/conditions/stomach-ache/#:~:text=See%20a%20GP%20if%3A&text=stomach%20pain%20or%20bloating%20will,more%20often%20or%20less%20often"]);
        DB::table('effects')->insert(['name' => 'Haematuria', 'description' => 'Blood in urine (pee) is not usually caused by anything serious, but you must get it checked out by a GP.', 'url' => "https://www.nhs.uk/conditions/blood-in-urine/"]);
    }
}