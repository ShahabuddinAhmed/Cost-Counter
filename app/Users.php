<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function jan()
    {
    	return $this->hasMany(Jan::class);
    }

    public function feb()
    {
    	return $this->hasMany(Feb::class);
    }

    public function mar()
    {
    	return $this->hasMany(Mar::class);
    }

    public function apr()
    {
    	return $this->hasMany(Apr::class);
    }

    public function may()
    {
    	return $this->hasMany(May::class);
    }

    public function jun()
    {
    	return $this->hasMany(Jun::class);
    }

    public function jul()
    {
    	return $this->hasMany(Jul::class);
    }

    public function aug()
    {
    	return $this->hasMany(Aug::class);
    }

    public function sep()
    {
    	return $this->hasMany(Sep::class);
    }

    public function oct()
    {
    	return $this->hasMany(Oct::class);
    }

    public function nov()
    {
    	return $this->hasMany(Nov::class);
    }

    public function dec()
    {
    	return $this->hasMany(Dec::class);
    }
}
