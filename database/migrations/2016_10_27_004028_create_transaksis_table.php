<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_barang')->unsigned();
            $table->integer('id_pembeli')->unsigned();
            $table->integer('jumlah');
            $table->decimal('total',10,2);

            //foreign key
            $table->foreign('id_barang')->references('id')
                  ->on('barangs')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
            $table->foreign('id_pembeli')->references('id')
                  ->on('pembelis')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
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
        Schema::dropIfExists('transaksis');
    }
}
