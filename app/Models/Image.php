<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function articles() {
        return $this->hasMany(ArticleImage::class);
    }

    public function platforms() {
        return $this->belongsTo(Platform::class);
    }

    public function settings() {
        return $this->belongsTo(Setting::class);
    }
}
