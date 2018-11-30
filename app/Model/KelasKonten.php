<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelasKonten extends Model
{
    use SoftDeletes;

    protected $table = 'kelas_konten';

}
