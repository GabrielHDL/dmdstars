<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const DRAFT = 1;
    const PUBLISHED = 2;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    // Relacion uno a muchos inversa
    public function sizes() {
        return $this->hasMany(Size::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }

    //Relacion muchos a muchos
    public function colors() {
        return $this->belongsToMany(Color::class)->withPivot('quantity', 'id');
    }

    //relacion uno a muchos polimoefica
    public function images() {
        return $this->morphMany(Image::class, "imageable");
    }

    //URL AMIGABLES
    public function getRouteKeyName() {
        return 'slug';
    }

}