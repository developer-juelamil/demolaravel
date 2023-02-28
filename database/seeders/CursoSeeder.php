<?php

namespace Database\Seeders;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $curso = new Curso();
        $curso->name = "Laravel";
        $curso->descripcion = "Laravelseeders";
        $curso->categoria = "INGENIERIA EN SISTEMAS";

        $curso->save();

        $curso2 = new Curso();
        $curso2->name = "artisan";
        $curso2->descripcion = "artisan frameword";
        $curso2->categoria = "licenciatura en informatica";

        $curso2->save();
    }
}
