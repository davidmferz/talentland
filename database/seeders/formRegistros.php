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
        //DATOS PERSONALES
        DB::table('form_registro')->insert([
            'tipo' => 'text',
            'nombre' => 'Nombre',
            'class' => 'form-control',
            'id_grupo' => 1
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'text',
            'nombre' => 'Apellido Paterno',
            'class' => 'form-control',
            'id_grupo' => 1
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'text',
            'nombre' => 'Apellido Materno',
            'class' => 'form-control',
            'id_grupo' => 1
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'number',
            'nombre' => 'Edad',
            'class' => 'form-control',
            'id_grupo' => 1
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'email',
            'nombre' => 'Email',
            'class' => 'form-control',
            'id_grupo' => 1
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'text',
            'nombre' => 'Telefono',
            'class' => 'form-control',
            'id_grupo' => 1
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'number',
            'nombre' => 'peso',
            'class' => 'form-control',
            'id_grupo' => 1
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'number',
            'nombre' => 'altura',
            'class' => 'form-control',
            'id_grupo' => 1
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Hipotirodismo',
            'class' => '',
            'id_grupo' => 2
        ]);

        //CONDICIONES DE SALUD
        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Diabetes',
            'class' => '',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Neuropatia diabetica',
            'class' => '',
            'id_grupo' => 2
        ]);


        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Hipoglucemia',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Depresión',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Alta Presión',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Alto Triglicéridos',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Arritmia Cardiaca',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Problemas del corazón',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Mala Circulación',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Insomnio',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Reflujo/Acidez',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Artritis',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Pólipos Intestinales o vaginales',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Divertículos',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Hemorroides',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Osteoporosis',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Dolores de espalda',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Gases estomacales indegestion',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Enfermedades autoinmunes',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'No puede ejercitarse',
            'id_grupo' => 2
        ]);

        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Problemas en su hígado riñones',
            'id_grupo' => 2
        ]);

        //MANIFESTACIONES INDESIABLES
        DB::table('form_registro')->insert([
            'tipo' => 'checkbox',
            'nombre' => 'Acné',
            'id_grupo' => 3
        ]); 

    }
}
