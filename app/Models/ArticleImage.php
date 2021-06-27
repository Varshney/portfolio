<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function articles() {
        return $this->belongsToMany(Article::class);
    }

    public function images() {
        return $this->belongsToMany(Image::class);
    }

    public function types() {
        return $this->belongsToMany(ImageType::class);
    }
}
