<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    protected $table = 'theloai';

    public function truyen() {
    	return $this->hasMany('App\truyen','idtheloai','id');
    }

    public function danhmuc() {
    	return $this->belongsto('App\danhmuc','iddanhmuc','id');
    }
}
