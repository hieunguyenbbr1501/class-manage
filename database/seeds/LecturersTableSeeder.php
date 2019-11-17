<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LecturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lecturers')->insert([
            'email' => 'test@lecturer.com',
            'code' => '17020748',
            'password' => bcrypt('test'),
        ]);
    }
}
