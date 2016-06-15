<?php

class Category extends Eloquent {

	public function category(){
		return $this->belongsTo('User'); 
	}

	public function product(){
		return $this->hasMany('Product','product_id');
	}

}
