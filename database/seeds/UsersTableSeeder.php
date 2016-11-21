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
        $admin->name = 'Soporte';
        $admin->email = 'soporte@inmobiliariasantodomingocartagena.com';
        $admin->password = bcrypt('adminsoporte123456');
        $admin->save();

        $admin = new User();
        $admin->name = 'Gerente';
        $admin->email = 'gerenciacomercial@inmobiliariasantodomingocartagena.com';
        $admin->password = bcrypt('admingerencia123456');
        $admin->save();

        $admin = new User();
        $admin->name = 'developer';
        $admin->email = 'developer@inmobiliariasantodomingocartagena.com';
        $admin->password = bcrypt('admin');
        $admin->save();

        $admin = new User();
        $admin->name = 'developer';
        $admin->email = 'hayderespit@gmail.com';
        $admin->password = bcrypt('admin');
        $admin->save();
    }
}
