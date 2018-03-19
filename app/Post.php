<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

	use SoftDeletes;

	protected $fillable = [
		'title', 'content', 'category_id', 'featured','slug'
	]; //lets user assign fields into our db.

	protected $dates = ['deleted_at']; //how we declare fields in our db to be treated as dates.....gon be created by softDeletes method in our blueprint

    public function category()
    {
    	return $this->belongsTo('App\Category'); //Many to one relationship
    }


    public function getFeaturedAttribute($featured)
	{
		return asset($featured);
	}
}
