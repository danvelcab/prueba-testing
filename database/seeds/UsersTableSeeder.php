<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    const PASS = '$2y$10$Ur6ecNbZYoRRjQKnh81wOe3niesiflm4.cwzCCY8l96STadDmLqne'; //123456789
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'john@email.com',
            'password'  => self::PASS
        ]);
        DB::table('users')->insert([
            'name' => 'William',
            'email' => 'william@email.com',
            'password'  => self::PASS
        ]);
    }
}
