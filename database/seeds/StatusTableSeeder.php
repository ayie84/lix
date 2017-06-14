<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert(['status_type' => 'In Progress', 'status_comment' => 'Work In Progress',]);
        DB::table('statuses')->insert(['status_type' => 'Pending', 'status_comment' => 'waiting for parts',]);
        DB::table('statuses')->insert(['status_type' => 'To Approve', 'status_comment' => 'waiting for Approve',]);
        DB::table('statuses')->insert(['status_type' => 'To Be Deliver', 'status_comment' => 'waiting for Deliver',]);
        DB::table('statuses')->insert(['status_type' => 'Deliver', 'status_comment' => 'Deliver to Customer',]);
        DB::table('statuses')->insert(['status_type' => 'Cancel', 'status_comment' => 'Cancel By Customer',]);
    }
}
