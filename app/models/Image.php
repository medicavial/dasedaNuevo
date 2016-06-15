<?php

class Image extends Eloquent {

	public function Product(){
		return $this->belongsTo('Product'); 
	}

}
