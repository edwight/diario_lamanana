<?php

class Post extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	

	protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo('User');
    }
     public function contenido()
    {
        return $this->hasOne('Contenido');
    }
    public function tags()
    {
        return $this->belongsToMany('Tag');
    }
    
    public function category()
    {
        return $this->belongsTo('Category');
    }
    public function img()
    {
        return $this->hasOne('Img');
    }
 
    public function getCarbonDay($date)
    {
        //$this->getCarbonDay = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d');
        //$this->getCarbonDay = \Carbon\Carbon::createFromTimeStamp(strtotime($date))->diffForHumans();
        //return $this->getCarbonDay;
    }
    public function getCarbonMinute($date)
    {
        //return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H');
    }

    public function getCarbonAgo($date)
    {
        setlocale(LC_TIME, 'es_ES.UTF-8');
        $this->getCarbonAgo = \Carbon\Carbon::createFromTimeStamp(strtotime($date))->diffForHumans();
        return $this->getCarbonAgo;
        //return Carbon\Carbon::now()->subDays($this->getCarbonDay($date))->diffForHumans();

    }
}
