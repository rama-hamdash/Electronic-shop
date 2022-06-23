<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table ="products";
    protected $fillable = [
        'date',
        'price',
        'image_url',
        'sel-price',
        'purshase-price',
        'quantity',
        'sold',
        'retreived'
    ];
    public function size(){
        return $this->belongsTo(Size::class,'size_id');
    }

    public function color(){
        return $this->belongsTo(Color::class,'color_id');
    }

    public function order(){
        return $this->belongsToMany(Order::class);
    }
    
}
