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

    public function meta()
    {
        $metadescription = self::get('description');
        $metaTitle = self::get('name');
        return [
            'metadescription'=>$metadescription,
            'metaTitle'=>$metaTitle
        ];
    }

    public function products()
    {
        return $this->hasMany(Product::Class);
    }
}

