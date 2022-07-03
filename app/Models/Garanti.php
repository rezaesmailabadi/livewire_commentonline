<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garanti extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'cost'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
