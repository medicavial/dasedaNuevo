<?php

class Brand extends Eloquent {

	public function product(){
		return $this->hasMany('Product','product_id');
	}

}
