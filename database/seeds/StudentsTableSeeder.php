<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            'email' => 'test@student.com',
            'code' => '17020748',
            'password' => bcrypt('test')
        ]);
        factory(\App\Student::class,30)->create();
    }
}
