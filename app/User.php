<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Campus;
use App\Enroll;

class User extends Authenticatable
{
	use Notifiable;
	use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'campus_id', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function campus() {
        return $this->belongsTo('App\Campus');
    }

    public function personalData() {
        return $this->hasOne('App\PersonalData');
    }

    public function enrolls() {
        return $this->hasMany('App\Enroll');
    }

}
