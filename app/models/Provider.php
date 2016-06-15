<?php

class Provider extends Eloquent {

	public function provider(){
		return $this->belongsTo('User'); 
	}

	public function product(){
		return $this->hasMany('Product','product_id');
	}

}
