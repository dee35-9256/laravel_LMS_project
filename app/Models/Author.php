<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\book;

class Author extends Model
{
    use HasFactory;

    public $fillable = [
        'author_name'
    ];
    public function book()
    {
        return $this->hasOne(book::class);
    }
}
