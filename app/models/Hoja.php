<?php

class Hoja extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	

	protected $table = 'hojas';

    public function revista()
    {
        return $this->belongsTo('Revista');
    }
}
