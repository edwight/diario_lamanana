<?php

class Category extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	

	protected $table = 'categories';

    public function posts()
    {
       return $this->hasMany('Post');
    }

    public function post()
    {
       return $this->belongsTo('Post');
    }


}
