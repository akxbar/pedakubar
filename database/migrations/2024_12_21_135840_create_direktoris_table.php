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
        Schema::create('direktoris', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('kategori_direktori_id');
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->text('multi_image')->nullable();
            $table->boolean('publish')->default(true);

            $table->string('alamat')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('link_gmap')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direktoris');
    }
};
