<?php

class Customer extends Eloquent {

	public function customer(){
		return $this->belongsTo('User'); 
	}

}
