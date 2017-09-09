<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table = 'tags';
	public function getRouteKeyName()
	{
	    return 'slug';
	}
	
    public function posts() {
    	return $this->morphedByMany(Post::class, 'taggable');
    }
}
