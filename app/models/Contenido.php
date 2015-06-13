<?php

class Contenido extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	

	protected $table = 'contenidos';

    public function post()
    {
        return $this->belongsTo('post');
    }

}
