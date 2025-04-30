<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = "Daniel Diaz";
        $user->email = "daniel.diaz04d@gmail.com";
        $user->password = bcrypt('12345678');
        $user->opinion = "Empresa familiar al servicio del cliente";
        // $user->avatar = "https://ui-avatars.com/api/?name=".$user->name;
        $user->save();

        $user->name = "test";
        $user->email = "test@example.com";
        $user->password = bcrypt('a');
        $user->opinion = "";
        // $user->avatar = "https://ui-avatars.com/api/?name=".$user->name;
        $user->save();

        User::factory(10)->create();
    }
}
