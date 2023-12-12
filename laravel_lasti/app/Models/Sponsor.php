<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $fillable = ['logo', 'nama', 'alamat', 'email', 'no_hp', 'nama_acara', 'kategori', 'feedback', 'SnK'];
}
