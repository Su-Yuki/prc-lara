<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert([
            'id' => 111,
            'body'=> 111,
            'task_id' => 111,
            'user_id' => 111,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);
    }
}
