<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('nama');
            $table->string('alamat');
            $table->string('email');
            $table->string('no_hp');
            $table->string('nama_acara');
            $table->string('kategori');
            $table->string('feedback');
            $table->string('SnK');
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
        Schema::dropIfExists('sponsors');
    }
}
