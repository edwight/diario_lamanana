<?php


class Perfil extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'perfiles';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function user()
    {
        return $this->belongTo('User');
    }
}

