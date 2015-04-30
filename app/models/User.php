<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Cartalyst\Sentry\Users\Eloquent\User as SentryUserModel;

class User extends SentryUserModel {

	public function post()
    {
        return $this->hasMany('Post');
    }
    public function perfil()
    {
        return $this->hasOne('Perfil');
    }
    public function Chicahots()
    {
        return $this->hasMany('Chicahot');
    }
}