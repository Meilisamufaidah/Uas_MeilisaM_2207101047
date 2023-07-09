<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPdamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pdam', function (Blueprint $table) {
           
           $table->increments('id_pelanggan');
            $table->date('tgl_tagihan');
            $table->string('no_pelanggan');
            $table->string('nama_pelanggan');
            
            $table->string('jumlah_meter');
            $table->string('biaya');
            
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
        Schema::dropIfExists('tb_pdam');
    }
}
