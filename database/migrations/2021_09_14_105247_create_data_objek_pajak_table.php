<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataObjekPajakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_objek_pajak', function (Blueprint $table) {
            $table->id();
            $table->integer('id_wp');
            $table->integer('id_jenis_op');
            $table->string('nopd');
            $table->string('nama_objek_pajak');
            $table->integer('id_kabupaten');
            $table->integer('id_kecamatan');
            $table->integer('id_kelurahan');
            $table->text('alamat');
            $table->text('keterangan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_objek_pajak');
    }
}
