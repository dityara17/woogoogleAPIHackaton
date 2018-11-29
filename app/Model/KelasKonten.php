<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KelasKonten extends Model
{
    use SoftDeletes;

    protected $table = 'kelas_konten';

}
