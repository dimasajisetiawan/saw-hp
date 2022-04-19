<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->increments('id_nilai',11);
            $table->unsignedBigInteger('id_smartphone');
            $table->unsignedBigInteger('id_kriteria_processor');
            $table->unsignedBigInteger('id_kriteria_ram');
            $table->unsignedBigInteger('id_kriteria_penyimpanan');
            $table->unsignedBigInteger('id_kriteria_slot_sim');
            $table->unsignedBigInteger('id_kriteria_harga');
            $table->timestamps();

            $table->foreign('id_smartphone')->references('id_smartphone')->on('smartphone');
            $table->foreign('id_kriteria_processor')->references('id_kriteria_processor')->on('kriteria_processor');
            $table->foreign('id_kriteria_ram')->references('id_kriteria_ram')->on('kriteria_ram');
            $table->foreign('id_kriteria_penyimpanan')->references('id_kriteria_penyimpanan')->on('kriteria_penyimpanan');
            $table->foreign('id_kriteria_slot_sim')->references('id_kriteria_slot_sim')->on('kriteria_slot_sim');
            $table->foreign('id_kriteria_harga')->references('id_kriteria_harga')->on('kriteria_harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai');
    }
}
