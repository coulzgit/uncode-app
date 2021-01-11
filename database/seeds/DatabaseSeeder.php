<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        App\Models\User::create([
          
            'prenom'=>'admin',
            'nom'=>'admin', 
            'email'=>'admin@gmail.com', 
            'password'=>'$2y$10$Ry0.9hF64KH/TABotL9.OeBLw7LevL2CrkTRRWG5mAkX8mqCASiu2',
            'nom_role'=>'admin'
        ]);

    }
}
