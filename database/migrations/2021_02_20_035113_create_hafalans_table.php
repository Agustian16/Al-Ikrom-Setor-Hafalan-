<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHafalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hafalans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_santri');
            $table->string('nama_surah');
            $table->integer('ayat');
            $table->string('catatan');
            $table->string('hasil_setoran');
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
        Schema::dropIfExists('hafalans');
    }
}
