<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Taikhoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoan', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('ho');
            $table->string('ten');
            $table->string('gioitinh');
            $table->integer('sdt');
            $table->date('ngaysinh');
            $table->string('diachi');
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::drop('taikhoan');
    }
}
