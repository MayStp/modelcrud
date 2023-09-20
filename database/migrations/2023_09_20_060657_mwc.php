<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mwc', function(Blueprint $table){
            $table->string('IDUser')->primary();
            $table->string('Username')->unique();
            $table->string('Password');
            $table->string('Nama');
            $table->string('Nomor_keanggotaan');
            $table->string('Foto_KTA');
            $table->string('Foto_profile');
            $table->string('Tempat_lahir');
            $table->date('Tanggal_lahir');
            $table->string('Jenis_Kelamin');
            $table->string('Pekerjaan');
            $table->string('Alamat');
            $table->string('Cabang');
            $table->string('Daerah');
            $table->string('Wilayah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
