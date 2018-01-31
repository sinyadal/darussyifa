<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    /* Database Relationship */
	public function post(){
		return $this->belongsToMany('TreatmentDetail');
	}
}
