<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enroll extends Model
{
    use SoftDeletes;

    protected $table = 'enroll';

    public function getUser(){
        return $this->belongsTo('App\Model\User','id_user');
    }
    public function getKelas(){
        return $this->belongsTo('App\Model\Kelas','id_kelas');
    }

}
