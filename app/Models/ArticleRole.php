<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleRole extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function articles() {
        return $this->belongsToMany(Article::class);
    }

    public function roles() {
        return $this->belongsToMany(Role::class);
    }
}
