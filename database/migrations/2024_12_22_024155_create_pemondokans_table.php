<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemondokans', function (Blueprint $table) {
            $table->id();
            $table->string('tempat_pemondokan_id');
            $table->string('title');
            $table->string('alamat')->nullable();
            $table->string('nama_kampung')->nullable();
            $table->string('rt')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('daya_tampung')->nullable();
            $table->string('jumlah_kamar_tidur')->nullable();
            $table->string('fasilitas_mck')->nullable();
            $table->string('kendaraan_roda4')->nullable();
            $table->string('kendaraan_roda2')->nullable();
            $table->text('body')->nullable();
            $table->json('image')->nullable();
            $table->boolean('publish')->default(true);
            $table->text('embed_gmap')->nullable();
            $table->string('link_gmap')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemondokans');
    }
};
