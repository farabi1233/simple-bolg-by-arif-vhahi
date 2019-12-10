<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Blog extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
