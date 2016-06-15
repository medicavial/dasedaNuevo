<?php

class Product extends Eloquent {

	public function product(){
		return $this->belongsTo('User'); 
	}

	public function category(){
		return $this->hasOne('Category'); 
	}

	public function provider(){
		return $this->hasOne('Provider'); 
	}

	public function brand(){
		return $this->hasOne('Brand'); 
	}

	public function images()
    {
        return $this->hasMany('Image','image_id');
    }

	// public function file(){
	// 	return $this->hasMany('File','file_id');
	// }

}
