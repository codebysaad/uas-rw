<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->bigInteger('nip');
            $table->string('pangkat', 100)->nullable();
            $table->string('jabatan', 100)->nullable()->default('Pengadministrasi');
            $table->bigInteger('norek');
            $table->string('email', 100)->default('informasi@iainkudus.ac.id');
            $table->string('deleted_at', 100)->nullable()->default('');
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
        Schema::dropIfExists('pegawais');
    }
}
