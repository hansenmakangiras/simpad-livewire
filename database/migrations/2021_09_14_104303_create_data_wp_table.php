<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataWpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_wajib_pajak', function (Blueprint $table) {
            $table->id();
            $table->integer('id_jenis_wp');
            $table->string('nama_wp', 150);
            $table->string('nik_nib', 15);
            $table->string('nwpd', 20);
            $table->integer('id_kabupaten');
            $table->integer('id_kecamatan');
            $table->integer('id_kelurahan');
            $table->text('alamat');
            $table->string('telepon', 15);
            $table->string('email');
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
        Schema::dropIfExists('data_wajib_pajak');
    }
}
