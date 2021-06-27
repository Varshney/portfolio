<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	use HasFactory;

	public function categories() {
		return $this->hasMany(ArticleCategory::class);
	}

	public function companies() {
		return $this->hasOne(Company::class);
	}

	public function images() {
		return $this->hasMany(ArticleImage::class);
	}

	public function platforms() {
		return $this->hasOne(Platform::class);
	}

	public function roles() {
		return $this->hasMany(ArticleRole::class);
	}

	public function software() {
		return $this->hasMany(ArticleSoftware::class);
	}

	public function types() {
		return $this->hasOne(ArticleType::class);
	}
}
