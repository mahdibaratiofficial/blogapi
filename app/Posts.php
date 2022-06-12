<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Http\Requests\PostsRequest;
use Egulias\EmailValidator\Warning\Comment;

class Posts extends Model
{

    use Sluggable;
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'body',
        'slug',
        'user_id'
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function Comments(){
        return $this->hasMany(Comments::class);
    }
}
