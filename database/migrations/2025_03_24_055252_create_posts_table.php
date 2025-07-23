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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('topik');
            // $table->string('penulis');
            // Cara 1: ini buat key id dari tabel user
            // $table->unsignedBigInteger('penulis_id');
            // $table->foreign('penulis_id')->references('id')->on('users');
            // Cara 2: ini buat contraind id dari tabel user
            $table->foreignId('penulis_id')->constrained(
                table: 'users',
                indexName: 'posts_user_id'
            );
            $table->foreignId('kategori_id')->constrained(
                table: 'kategoris',
                indexName: 'posts_kategori_id'
            );
            $table->text('isi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
