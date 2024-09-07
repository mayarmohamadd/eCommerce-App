<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'image', 'feature_id'];

    public function feature(){
        return $this->belongsTo(Feature::class);
    }
    public function getImageAttribute($value)
    {
        return asset($value);
    }
}
