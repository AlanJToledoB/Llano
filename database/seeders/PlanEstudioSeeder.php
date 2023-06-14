<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanEstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'nombre_materias' => 'Lengua 1-2-3',
            ],
            [
                'nombre_materias' => 'Ingles técnico 1-2-3',
            ],
            [
                'nombre_materias' => 'Ingles técnico 1-2-3',
            ],
            [
                'nombre_materias' => 'Ingles técnico 1-2-3',
            ],
            [
            
            ],
       // Continúa agregando el resto de los datos
        ];

        DB::table('plan_de_estudio')->insert($datos);

    }
}
