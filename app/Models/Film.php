<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $guards = [];
    protected $fillable = ['id', 'foto', 'nama_film', 'rating', 'tanggal', 'deskripsi'];
}
