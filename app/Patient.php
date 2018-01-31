<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'ic_number', 'gender', 'phone_number', 'email', 'address', 'postcode', 'state',
    ];

    /* Database Relationship */
	public function post(){
		return $this->belongsToMany('TreatmentDetail');
	}
}
