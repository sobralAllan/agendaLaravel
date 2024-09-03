<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //método para inserção
        DB::table('registro')->insert([
            'date' => '2024-09-02',
            'descricao' => ""
        ]);
    }
}//fim da classe
