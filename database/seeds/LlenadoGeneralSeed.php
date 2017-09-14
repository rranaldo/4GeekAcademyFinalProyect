<?php

use Illuminate\Database\Seeder;

class LlenadoGeneralSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('texto')->insert([
            'contenido' => 'Do something you love.',
            'contexto' => 'TituloPrincipal',
        ]);
        DB::table('texto')->insert([
            'contenido' => 'Another free HTML5 bootstrap template by FREEHTML5.co released under Creative Commons 3.0',
            'contexto' => 'SubTituloPrincipal',
        ]);
        DB::table('texto')->insert([
            'contenido' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'contexto' => 'SubtituloWork',
        ]);
        DB::table('texto')->insert([
            'contenido' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'contexto' => 'SubtituloTestimonial',
        ]);
        DB::table('texto')->insert([
            'contenido' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'contexto' => 'SubtituloServices',
        ]);
        DB::table('texto')->insert([
            'contenido' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'contexto' => 'SubtituloAbout',
        ]);
        DB::table('texto')->insert([
            'contenido' => '89,2343409,1302,52',
            'contexto' => 'arreglo cifras funFacts',
        ]);
        DB::table('texto')->insert([
            'contenido' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'contexto' => 'Subtitulo GetInTouch.',
        ]);
        DB::table('texto')->insert([
            'contenido' => '5555 Love Paradise 56 New Clity 5655,<br>Excel Tower United Kingdom',
            'contexto' => 'Direccion contacto',
        ]);
        DB::table('texto')->insert([
            'contenido' => '(123) 465-6789',
            'contexto' => 'Telefono contacto',
        ]);
        DB::table('texto')->insert([
            'contenido' => 'info@freehtml5.co',
            'contexto' => 'correo contacto',
        ]);
        DB::table('texto')->insert([
            'contenido' => 'freehtml5.co',
            'contexto' => 'pagina url contacto.',
        ]);
        DB::table('texto')->insert([
            'contenido' => 'Elate Free HTML5. All Rights Reserved. ',
            'contexto' => 'Mensaje Footer',
        ]);

    }
}
