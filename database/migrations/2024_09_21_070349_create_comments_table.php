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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');  // Foreign key from posts
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // Foreign key from users
            $table->text('comment');
            $table->unsignedBigInteger('parent_comment')->nullable();  // For nested comments (threading)
            $table->foreign('parent_comment')->references('id')->on('comments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
