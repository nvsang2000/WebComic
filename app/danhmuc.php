<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    protected $table = 'danhmuc';

    public function truyen() {
    	return $this->hasMany('App\truyen','iddanhmuc','id');
    }

    public function theloai() {
    	return $this->hasMany('App\theloai','iddanhmuc','id');
    }
}
