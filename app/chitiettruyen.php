<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitiettruyen extends Model
{
    protected $table = 'chitiettruyen';

    public function truyen() {
    	return $this->hasMany('App\truyen','idchitiet','idtruyen');
    }
}
