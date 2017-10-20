<?php

use Illuminate\Database\Seeder;

class AclTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->truncate();

        DB::table('roles')->insert([
            'name' => 'administrador-master',
            'label' => 'Administrador master do sistema'
        ]);
        DB::table('roles')->insert([
            'name' => 'administrador',
            'label' => 'Administrador restrito do sistema'
        ]);
        DB::table('roles')->insert([
            'name' => 'usuario',
            'label' => 'Usuário comum'
        ]);


        DB::table('permissions')->truncate();
        DB::table('permissions')->insert([
            'name' => 'pg-admin',
            'label' => 'Acesso ao admin do site'
        ]);
        DB::table('permissions')->insert([
            'name' => 'admin-acl',
            'label' => 'Acesso ao sistema de ACL'
        ]);
        DB::table('permissions')->insert([
            'name' => 'admin-usuario',
            'label' => 'Acesso ao cadastro dos usuários'
        ]);


        DB::table('role_user')->truncate();
        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);

        DB::table('permission_role')->truncate();
        DB::table('permission_role')->insert([
            'role_id' => 1,
            'permission_id' => 1
        ]);
        DB::table('permission_role')->insert([
            'role_id' => 1,
            'permission_id' => 2
        ]);
        DB::table('permission_role')->insert([
            'role_id' => 1,
            'permission_id' => 3
        ]);        
    }
}
