<?php

use Illuminate\Database\Seeder;
use Negocio\Entities\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'soporte@inmobiliariasantodomingocartagena.com';
        $admin->password = bcrypt('admin');
        $admin->save();
    }
}
