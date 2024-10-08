<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image'];
    public function getImageAttribute($value)
    {
        return asset($value);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
