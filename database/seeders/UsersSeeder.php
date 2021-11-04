<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->fullname = "Arif Nainggolan";
        $user->role = "Admin";
        $user->position = "Fullstack Engginer";
        $user->department = "IT";
        $user->username = "FIN18449";
        $user->email = "arifsumanggara64@gmail.com";
        $user->mobile_number = "081234567890";
        $user->addres = "Jl.Lenteng Agung";
        $user->password = bcrypt('12345678');
        $user->is_admin = true;
        $user->save();
    }
}
