<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class formRegistros extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('form_registro')->insert([
            'tipo' => 'text',
            'nombre' => 'Nombre'
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'text',
            'nombre' => 'Apellido Paterno'
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'text',
            'nombre' => 'Apellido Materno'
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'number',
            'nombre' => 'Edad'
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'email',
            'nombre' => 'Email'
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'text',
            'nombre' => 'Telefono'
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'number',
            'nombre' => 'peso'
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'number',
            'nombre' => 'altura'
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'text',
            'nombre' => 'campo'
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'number',
            'nombre' => 'campo'
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'number',
            'nombre' => 'campo'
        ]);


        DB::table('form_registro')->insert([
            'tipo' => 'number',
            'nombre' => 'campo'
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'number',
            'nombre' => 'campo'
        ]);
    }
}
