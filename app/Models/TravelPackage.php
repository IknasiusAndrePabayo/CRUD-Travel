<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelPackage extends Model
{
    use HasFactory;

    protected $table = 'paket_perjalanan'; // Nama tabel yang baru

    protected $fillable = [
        'title', // Mengubah 'name' menjadi 'title'
        'description',
        'price',
        'duration', // Menambahkan kolom duration
    ];
}