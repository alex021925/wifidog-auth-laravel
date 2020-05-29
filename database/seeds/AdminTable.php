<?php

/**
 * Created by PhpStorm.
 * User: Tabares
 * Date: 29/05/2020
 * Time: 12:29
 */
use Illuminate\Database\Seeder;
use App\Admin;

class AdminTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create(array(
            'name'  => 'admin',
            'email'     => 'admin@admin.com',
            'avatar'=>'',
            'password' => Hash::make('admin@123') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}