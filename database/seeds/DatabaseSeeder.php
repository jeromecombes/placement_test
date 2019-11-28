<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');

        $this->command->info('User table seeded!');
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name' => 'Student',
            'email' => 'student',
            'password' => '$2y$10$y1n6W1gNefKxbbqZIxfx4uqi6kuDOaMwlwwsPWmDlTTYHW0V17amK',
            'remember_token' => 'UfRRLz2JSIZ2f3BcsQU7lDcO0dQTxgF15SasJJW3sm28pLnf5WOZTNoXq5fD'
        ));
    }
}
