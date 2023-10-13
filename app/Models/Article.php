<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['judul_artikel','isi_artikel','thumbnail_artikel','tag_artikel','kategori_artikel'];
}
