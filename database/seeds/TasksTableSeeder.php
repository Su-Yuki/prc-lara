<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'id' => 111,
            'title'=> 111,
            'contents'=>111,
            'image_at'=>111,
            'user_id' => 111,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);
    }
}
