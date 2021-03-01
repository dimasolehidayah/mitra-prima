<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaturanWebsite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaturan_website', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_website',50);
            $table->string('logo',50);
            $table->text('deskripsi');
            $table->string('no_hp', 20);
            $table->string('email');
            $table->text('alamat_kantor');
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
        Schema::dropIfExists('pengaturan_website');
    }
}
