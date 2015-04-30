<?php

class Revista extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	

	protected $table = 'revistas';

    public function hojas()
    {
        return $this->hasMany('Hoja');
    }
}
