<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'cost', 'color_id', 'garanti_id', 'discount_id'];


    public function colors()
    {
        return $this->hasMany(Color::class);
    }


    public function garanti()
    {
        return $this->hasMany(Garanti::class);
    }


    public function discount()
    {
        return $this->hasMany(Discount::class);
    }
}
