<?php

use Illuminate\Database\Seeder;

class BookmarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bookmarks')->insert([
            'id' => 111,
            'task_id' => 111,
            'user_id' => 111,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);
    }
}
