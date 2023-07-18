<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Relacion uno a muchos a traves
    public function products() {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

    // Relacion muchos a muchos
    public function brands() {
        return $this->belongsToMany(Brand::class);
    }

    // Relacion uno a muchos
    public function subcategories() {
        return $this->hasMany(Subcategory::class);
    }

    // Relacion uno a muchos inversa
    public function gender() {
       return $this->belongsTo(Gender::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
