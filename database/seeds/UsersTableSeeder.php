<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=Role::where('name','Admin')->first();
        $dokter=Role::where('name','Dokter')->first();
        $peternak=Role::where('name','Peternak')->first();

        $admin = new User();
        $admin->name ='admin';
        $admin->email ='admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->roles()->attach($admin);

        $dokter = new User();
        $dokter->name ='sihap';
        $dokter->email ='sihap@gmail.com';
        $dokter->password = bcrypt('sihap123');
        $dokter->save();
        $dokter->roles()->attach($dokter);

        $peternak = new User();
        $peternak->name ='satrio';
        $peternak->email ='satrio@gmail.com';
        $peternak->password = bcrypt('satrio123');
        $peternak->save();
        $peternak->roles()->attach($peternak);
    }
}
