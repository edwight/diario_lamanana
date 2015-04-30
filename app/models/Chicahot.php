<?php

class Chicahot extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	
	protected $table = 'chicahots';

    public function user()
    {
        return $this->belongsTo('User');
    }
 
}
