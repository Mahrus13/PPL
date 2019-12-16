<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=new Role();
        $admin->name='Admin';
        $admin->save();

        $dokter=new Role();
        $dokter->name='Dokter';
        $dokter->save();

        $peternak=new Role();
        $peternak->name='Peternak';
        $peternak->save();
    }
}
