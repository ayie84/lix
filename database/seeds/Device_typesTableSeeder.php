<?php

use Illuminate\Database\Seeder;

class Device_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('device_types')->insert(['device' => 'Komputer', 'notes' => 'pc etc..',]);
        DB::table('device_types')->insert(['device' => 'Handphone', 'notes' => 'Multi model Mobile phones.',]);
        DB::table('device_types')->insert(['device' => 'Printer', 'notes' => 'Multi model Printer Devices.',]);
        DB::table('device_types')->insert(['device' => 'Lain-lain', 'notes' => 'Others Model.',]);
        DB::table('device_types')->insert(['device' => 'Undefined', 'notes' => 'Unkwon model/type device.',]);
    }
}
