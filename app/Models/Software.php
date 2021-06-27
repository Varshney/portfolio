<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function articles() {
        return $this->hasMany(ArticleSoftware::class);
    }
}
