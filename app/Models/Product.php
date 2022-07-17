<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "products";
    protected $fillable = [
        'date',
        'price',
        'image_url',
        'sel_price',
        'purshase_price',
        'quantity',
        'sold',
        'retreived',
        'color_id',
        'size_id',
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->model->name,
        );
    }
    public function size()
    {
        return $this->belongsTo(Size::class, 'size_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
    public function model()
    {
        return $this->belongsTo(Modele::class);
    }
}
