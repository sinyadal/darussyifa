<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreatmentDetail extends Model
{
    /* Database Relationship */
	public function postCategories(){
		return $this->hasOne('App\Patient', 'id', 'user_id');
	}
}
