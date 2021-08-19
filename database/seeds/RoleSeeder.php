<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name'=> "Super Administrateur",
            'description'=> "Super admin",
            'label'=> "SUPER ADMIN",
        ]);
        DB::table('roles')->insert([
            'name'=> " Administrateur",
            'description'=> "Admin",
            'label'=> "ADMIN",
        ]);
        DB::table('roles')->insert([
            'name'=> " Manager",
            'description'=> "Country's business Manager",
            'label'=> "MANAGER",
        ]);
        DB::table('roles')->insert([
            'name'=> "Investisseur",
            'description'=> "Other users those could invest",
            'label'=> "INVESTISSOR",
        ]);
    }
}
