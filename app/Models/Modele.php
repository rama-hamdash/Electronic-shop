<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;
    protected $table ="models";
    protected $fillable = [
        'description',
        'name' ,
        'model_num',
        'active'
    ];
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
