<?php

// cara membuat migrate dengan terminal
// php artisan make:migration create_posts_table
// untuk membuat model beserta migrate nya : 
// php artisan make:model User -m

// membuar relasi one to many
// Schema::create('posts', function (Blueprint $table) {
//     $table->id();
//     $table->string('title');
//     $table->text('body');
//     $table->foreignId('user_id')->constrained()->onDelete('cascade');
//     $table->timestamps();
// });

//membuat relasi one to one
// Schema::create('profiles', function (Blueprint $table) {
//     $table->id();
//     $table->string('bio');
//     $table->foreignId('user_id')->constrained()->onDelete('cascade')->unique();
//     $table->timestamps();

//membuar relasi many to many
// Schema::create('role_user', function (Blueprint $table) {
//     $table->id();
//     $table->foreignId('user_id')->constrained()->onDelete('cascade');
//     $table->foreignId('role_id')->constrained()->onDelete('cascade');
//     $table->timestamps();
// });

//cara membuat migrate baru tanpa otak atik migrate yang sudah done
//php artisan make:migration add_status_to_posts_table --table=posts
// add_status_to_posts_table.php
// public function up()
// {
//     Schema::table('posts', function (Blueprint $table) {
//         $table->string('status')->default('draft');
//     });
// }



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
            $table->string('title');
            $table->string('author');
            $table->string('slug')->unique();
            $table->text('body');
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


