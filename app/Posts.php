<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{

    use Sluggable;
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'body',
        'slug',
        'author'
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
