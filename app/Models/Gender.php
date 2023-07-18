<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Gender extends Model
{
    use HasFactory;
    use HasRelationships;
    protected $fillable = ['name', 'slug', 'image', 'icon'];

    // Relacion uno a muchos
    public function categories() {
        return $this->hasMany(Category::class);
    }

    // Relacion uno a muchos a traves de varios modelos
    public function products() {
        return $this->hasManyDeep(Product::class, [Category::class, Subcategory::class]);
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
