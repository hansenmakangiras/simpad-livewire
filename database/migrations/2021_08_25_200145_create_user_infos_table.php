<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('gelar', 30);
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('nop_pbb', 30);
            $table->string('no_telepon', 20);
            $table->year('tahun_sppt')->default(now()->year);
            $table->integer('status_hubungan');
            $table->integer('domisili');
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
        Schema::dropIfExists('user_infos');
    }
}
