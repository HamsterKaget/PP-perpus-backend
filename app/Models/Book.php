<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "category_id",
        "title",
        "author",
        "publisher",
        "language",
        "thumbnail",
        "total_stock",
        "total_page",
        "description",
        "isbn",
    ];

    public function Categories() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function bookTags()
    {
        return $this->hasMany(BookTag::class);
    }

    public function tags()
    {
        return $this->hasManyThrough(Tag::class, BookTag::class);
    }

}
