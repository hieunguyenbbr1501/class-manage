<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStudentsAndLecturersForUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users',function (Blueprint $table){
            $table->boolean('is_student')->default(0)->index();
            $table->boolean('is_lecturer')->default(0)->index();
            $table->boolean('is_admin')->default(0)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users',function (Blueprint $table){
            $table->dropColumn('is_student');
            $table->dropColumn('is_lecturer');
            $table->dropColumn('is_admin');
        });
    }
}
