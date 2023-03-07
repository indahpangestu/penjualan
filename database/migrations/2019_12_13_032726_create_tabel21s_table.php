<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabel21sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel21s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Kode',5)->primary();
            $table->string('namatabel21', 25);
            $table->integer('jumlahtabel21');
            $table->integer('satuantabel21');
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
        Schema::dropIfExists('tabel21s');
    }

}
