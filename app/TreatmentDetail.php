<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TreatmentDetail extends Model
{	
	protected $fillable = [
        'user_id', 'illness', 'doctor', 'comment',
    ];


    /* Database Relationship */
	public function postCategories(){
		return $this->hasOne('App\Patient', 'id', 'user_id');
	}
}
