<?php

namespace App\Models;

//membuat model beserta migrationnya
//php artisan make:model Post -m

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{   
    use HasFactory;
    protected $with = ['author', 'category'];
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'author', 'slug', 'body'];

    public function author(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
}

// 1. Hanya ubah logika di Model (PHP class)

// Contoh:

// class Post extends Model
// {
//     use HasFactory;

//     protected $fillable = ['title', 'body', 'status'];
// }


// ➡️ Ini cuma ubah properti di kode PHP, bukan struktur tabel database.
// 👉 Jadi tidak perlu migrate sama sekali. Langsung jalan.

// 2. Ubah struktur tabel (di migration)

// Misalnya:

// Tambah kolom baru (status)

// Ubah tipe data kolom

// Hapus kolom

// Nah ini baru butuh migration. Pilihannya:

// a) Kalau tabel masih kosong → bisa pakai migrate:fresh
// php artisan migrate:fresh


// Ini akan drop semua tabel, lalu jalankan ulang semua migration dari nol.
// ⚠️ Semua data hilang. Biasanya dipakai saat development.

// b) Kalau tabel sudah ada data penting → buat migration baru
// php artisan make:migration add_status_to_posts_table --table=posts


// Isi migration:

// Schema::table('posts', function (Blueprint $table) {
//     $table->string('status')->default('draft');
// });


// Lalu jalankan:

// php artisan migrate


// ➡️ Dengan cara ini, data lama tetap aman.

// c) Kalau mau rollback terakhir lalu ulang migrate
// php artisan migrate:rollback
// php artisan migrate


// ➡️ Cocok kalau kamu baru saja bikin migration terakhir dan sadar ada salah.

// 🔑 Kesimpulan

// Ubah kode Model saja → ❌ tidak perlu migrate.

// Ubah struktur tabel → ✅ perlu migrate.

// Database kosong → migrate:fresh

// Database ada data penting → bikin migration baru lalu migrate.