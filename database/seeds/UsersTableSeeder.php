<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'id' => 111,
            'name'=> 111,
            'email'=>111,
            'password'=>111,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);
    }
}
