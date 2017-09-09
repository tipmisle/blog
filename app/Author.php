<?php 

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Author extends Model {
	protected $table = 'authors';

	public function fullName() {
		return $this->first_name . ' ' . $this->last_name;
	}

	public function avatar() {
		return 'https://www.gravatar.com/avatar/' . md5($this->email) . '?s=60&d=mm';
	}

	public function posts() {
		return $this->hasMany(Post::class);
	}

}
