<?php

namespace Database\Seeders;

use App\Models\Establecimiento;
use App\Models\Sede;
use App\Models\Secretaria;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*$sede = new Sede();
        $sede->nombre = "laravel";
        $sede->codigo_dane = "28485688";
        $sede->establecimiento_id= 2;

        $sede->save();*/

        Sede::factory(50)->create();
        Secretaria::factory(50)->create();
        Establecimiento::factory(50)->Create();
    }
}
