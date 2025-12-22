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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('eyebrow_text')->nullable(); // Untuk teks kecil di atas judul
            $table->enum('media_type', ['image', 'video'])->default('image');
            $table->string('media_file'); // Nama file gambar atau video
            $table->string('stroke_text')->default('ARMADO'); // Teks background
            $table->string('btn_fill_text')->default('About Us');
            $table->string('btn_fill_url')->default('#');
            $table->string('btn_border_text')->default('Our Services');
            $table->string('btn_border_url')->default('#');
            $table->integer('order_index')->default(0); // Untuk mengurutkan slide
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
