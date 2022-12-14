<?php

namespace App\Models;

use App\Traits\BelongToStore;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory,BelongToStore;

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
