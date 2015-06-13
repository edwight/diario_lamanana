<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Database\Eloquent\Model;
class User extends Eloquent implements UserInterface, RemindableInterface {

    protected $fillable = ['name','email','type'];

    protected $hidden = ['password', 'remember_token'];

    public function getAuthIdentifier()
    {
            return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
            return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
            return $this->email;
    }

     public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }     

    

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
    public function setPasswordAttribute($value)
    {
        if(!empty($value))
        {
            $this->attributes['password'] = Hash::make($value);
        }
    }
    public function scopeName($query, $name)
    {
        if(trim($name) !="")
        {
            $query->where('name',"LIKE","%$name%")->get();
        }
        
    }

}