<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function bookshelf()
    {
        return $this->belongsTo(Bookshelves::class, 'bookshelf_id', 'id');
    }
}
