<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class truyen extends Model
{
    protected $table = 'truyen';

    public function chitiettruyen() {
    	return $this->belongsto('App\chitiettruyen','idchitiet','id');
    }

    public function theloai() {
    	return $this->belongsto('App\theloai','idtheloai','id');
    }

    public function danhmuc() {
    	return $this->belongsto('App\danhmuc','iddanhmuc','id');
    }
}
