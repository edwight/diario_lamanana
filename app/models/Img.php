<?php

class Img extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	

	protected $table = 'imgs';

    public function post()
    {
        return $this->belongsTo('Post');
    }
    
}
