<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\ArrayShape;

class Category extends Model
{
    use HasFactory;

    use Sluggable;
    use SluggableScopeHelpers;

    public $timestamps = false;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * Create the relationship with Products
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Products() // fixme p minuscule comme toute methode
    {
        return $this->hasMany(Product::Class);
    }
}
