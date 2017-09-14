<?php

use Illuminate\Database\Seeder;

class UserAdminCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'administrador',
            'email' => 'ranaldoraffaele@gmail.com',
            'password' => bcrypt('contraseña'),
        ]);
    }
}
