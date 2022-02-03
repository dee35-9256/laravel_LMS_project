<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\book;

class Category extends Model
{
    use HasFactory;

    public $fillable = ['category'];

    public function book()
    {
        return $this->hasOne(book::class);
    }
}
 
