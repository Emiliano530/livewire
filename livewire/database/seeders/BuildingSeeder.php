<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('buildings')->insert([
            'letter' => 'A',
            'name' => 'Direccion general',
            'common_name' => 'Servicios escolares',
            'description' => 'Aqui se encuentra la direccion general, el area de servicios escolares y el departamento de recursos humanos.',
            'references' => 'Es el primer edificio a la derecha desde la entrada del instituto.',
            'top' => '10',
            'left' => '10',
            'width' => '10',
            'height' => '10',
        ]);

        DB::table('buildings')->insert([
            'letter' => 'B',
            'name' => 'Recursos financieros',
            'description' => 'Aqui se encuentra el area relacionada a pagos y financiamiento del instituto.',
            'references' => 'se encuentra seguido del edificio A en direccion derecha del mismo.',
            'top' => '15',
            'left' => '10',
            'width' => '10',
            'height' => '10',
        ]);

        DB::table('buildings')->insert([
            'letter' => 'C',
            'name' => 'Centro de informacion',
            'common_name' => 'Biblioteca',
            'description' => 'Aqui se encuentra la biblioteca.',
            'references' => 'se encuentra enfrente de el edifico A es el segundo edificio yendo hacia el frente desde la entrada.',
            'top' => '20',
            'left' => '10',
            'width' => '10',
            'height' => '10',
        ]);

        DB::table('buildings')->insert([
            'letter' => 'D',
            'name' => 'Tecnologias de informacion',
            'common_name' => 'Laboratorios',
            'description' => 'En este edificio se encuentra el area de tecnologias de informacion asi como los laboratorios de computo del instituto.',
            'references' => 'Es el primer edificio hacia la izquierda desde la entrada.',
            'top' => '25',
            'left' => '10',
            'width' => '10',
            'height' => '10',
        ]);

        DB::table('buildings')->insert([
            'letter' => 'E',
            'name' => 'Taller de usos multiples',
            'description' => 'En este edificio se encuentra las maquinas grandes del instituto.',
            'references' => 'Este se encuentra enfrente del edificio D y es el segundo edificio a la izquierda de frente desde la entrada.',
            'top' => '30',
            'left' => '10',
            'width' => '10',
            'height' => '10',
        ]);

        DB::table('buildings')->insert([
            'letter' => 'F',
            'name' => 'Aulas de lenguas extranjeras',
            'common_name' => 'Salones de ingles',
            'description' => 'En este edificio se encuentran los salones en donde se imparten las clases de ingles.',
            'references' => 'Este se encuentra a la izquierda del edificio E',
            'top' => '35',
            'left' => '10',
            'width' => '10',
            'height' => '10',
        ]);

        DB::table('buildings')->insert([
            'letter' => 'G',
            'name' => 'Sala de usos multiples',
            'description' => 'Edificio en donde se realizan algunas juntas y reparticion de cosas, como uniformes',
            'references' => 'Es el tercer edificio a la izquierda de frente desde la entrada.',
            'top' => '40',
            'left' => '10',
            'width' => '10',
            'height' => '10',
        ]);

        DB::table('buildings')->insert([
            'letter' => 'H',
            'name' => 'Laboratorio CNC',
            'description' => 'En este edificio se encuentra el salon de bordado y el laboratorio CNC asi como algunas aulas.',
            'references' => 'Se encuentra a la izquierda del edificio G',
            'top' => '10',
            'left' => '30',
            'width' => '10',
            'height' => '10',
        ]);

        DB::table('buildings')->insert([
            'letter' => 'I',
            'name' => 'Cancha mixta',
            'common_name' => 'Canchas',
            'description' => 'Es el area donde estan la cancha multiple y el campo de beisbol',
            'references' => 'Esta area se encuentra mas a la derecha del instituto a la derecha del edificio C.',
            'top' => '15',
            'left' => '30',
            'width' => '10',
            'height' => '10',
        ]);

        DB::table('buildings')->insert([
            'letter' => 'J',
            'name' => 'Casetas de servicios generales',
            'common_name' => 'Servicios generales',
            'description' => 'En este edificio se encuentra el almacen de recursos materiales.',
            'references' => 'Se encuentra directamente a la izquierda de la entrada.',
            'top' => '20',
            'left' => '30',
            'width' => '10',
            'height' => '10',
        ]);

        DB::table('buildings')->insert([
            'letter' => 'K',
            'name' => 'Auditorio principal',
            'common_name' => 'Auditorio magno',
            'description' => 'En este edificio se encuentra el auditorio principal donde se realizan conferencias con mas alumnos.',
            'references' => 'Es el edificio que se encuentra exactamente al frente de la entrada y a la derecha del edificio G.',
            'top' => '25',
            'left' => '30',
            'width' => '10',
            'height' => '10',
        ]);

        DB::table('buildings')->insert([
            'letter' => 'L',
            'name' => 'Academias II e IEM',
            'common_name' => 'Edificio de industrial',
            'description' => 'En este edificio se encuentran las carreras de II e IEM, ademas de la subdireccion de planeacion.',
            'references' => 'Se encuentra a la derecha del edificio F',
            'top' => '30',
            'left' => '30',
            'width' => '10',
            'height' => '10',
        ]);

        DB::table('buildings')->insert([
            'letter' => 'M',
            'name' => 'Academias ISC, IER e IE',
            'common_name' => 'Edificio de sistemas',
            'description' => 'En este edificio se encuentran las carreras de ISC, IER e IE asi como tambien el auditorio M',
            'references' => 'Se encuentra a la izquierda del edificio H.',
            'top' => '35',
            'left' => '30',
            'width' => '10',
            'height' => '10',
        ]);

        DB::table('buildings')->insert([
            'letter' => 'N',
            'name' => 'Laboratorio de electromecanica',
            'description' => 'En este edificio se encuentran laboratorios para hacer practicas.',
            'references' => 'se encuentra a la izquierda del edificio M.',
            'top' => '40',
            'left' => '30',
            'width' => '10',
            'height' => '10',
        ]);
    }
}
