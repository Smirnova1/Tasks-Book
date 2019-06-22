<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->delete();

        DB::table('statuses')->insert([
            'name' => 'new'
        ]);
        DB::table('statuses')->insert([
            'name' => 'feedback'
        ]);
        DB::table('statuses')->insert([
            'name' => 'progress'
        ]);
        DB::table('statuses')->insert([
            'name' => 'review'
        ]);
        DB::table('statuses')->insert([
            'name' => 'testing'
        ]);
        DB::table('statuses')->insert([
            'name' => 'passed'
        ]);
    }
}
