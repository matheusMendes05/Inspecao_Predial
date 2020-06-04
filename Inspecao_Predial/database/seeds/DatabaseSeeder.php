<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        DB::table('users')->insert([
            'name' => 'JOAO ALVES DANTAS',
            'profissional_tittle' => 'ENGENHEIRO CIVIL',
            'card_n' => '3823/D-GO',
            'national_registry' => '1004813856',
            'email' => 'joao_alves@gmail.com',
            'situation' => 'REGULAR',
            'password' => '12345678',
        ]);
    }
}
