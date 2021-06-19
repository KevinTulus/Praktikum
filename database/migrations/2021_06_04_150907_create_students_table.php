<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->integer('kelas');
            $table->integer('b_inggris')->nullable();
            $table->integer('b_indonesia')->nullable();
            $table->integer('matematika')->nullable();
            $table->integer('fisika')->nullable();
            $table->integer('kimia')->nullable();
            $table->integer('biologi')->nullable();
            $table->integer('sejarah')->nullable();
            $table->integer('ekonomi')->nullable();
            $table->integer('sosiologi')->nullable();
            $table->integer('geografi')->nullable();
            $table->integer('pkn')->nullable();
            $table->integer('agama')->nullable();
            $table->integer('penjas')->nullable();
            $table->integer('komputer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
