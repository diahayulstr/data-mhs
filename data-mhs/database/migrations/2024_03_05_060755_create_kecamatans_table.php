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
        Schema::create('kecamatans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('prov_id')->unsigned();
            $table->bigInteger('kab_id')->unsigned();
            $table->string('nama_kecamatan');
            $table->timestamps();
        });

        Schema::table('kecamatans', function(Blueprint $table){
            $table->foreign('kab_id')->references('id')->on('kabupatens')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kecamatans');
    }
};
