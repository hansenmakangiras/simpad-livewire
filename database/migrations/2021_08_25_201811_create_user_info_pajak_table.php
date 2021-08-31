<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfoPajakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info_pajak', function (Blueprint $table) {
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('jenis_pajak_id');
            $table->unsignedBigInteger('user_info_id');
            $table->foreign('jenis_pajak_id')
                ->references('id')
                ->on('ref_jenis_pajak')
                ->onDelete('cascade');
            $table->foreign('user_info_id')
                ->references('id')
                ->on('user_infos')
                ->onDelete('cascade');
            $table->primary(['userid', 'user_info_id'], 'user_info_pajak_jenis_pajak_id_user_info_id_primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_info_pajak');
    }
}
