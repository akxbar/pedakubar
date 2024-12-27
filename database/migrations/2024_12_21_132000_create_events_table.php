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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('kategori_id');
            $table->string('icon')->nullable();
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->time("begin")->nullable();
            $table->time("end")->nullable();

            $table->string('tempat')->nullable();
            $table->string('alamat')->nullable();
            $table->string('narsum')->nullable();

            $table->string('link_gmap')->nullable();
            $table->text('materi')->nullable();
            $table->boolean('publish')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
