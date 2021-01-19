    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Taobang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truyen', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('tentruyen');
            $table->longText('hinh');
            $table->text('chitiet');
            $table->string('trangthai');
            $table->Integer('idchitiet');
            $table->Integer('idtheloai');
            $table->Integer('iddanhmuc');
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
        Schema::drop('truyen');
    }
}
