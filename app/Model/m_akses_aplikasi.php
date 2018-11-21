<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class m_akses_aplikasi extends Model
{
    protected $table = 'm_akses_aplikasi';

    protected $fillable = ['akses_aplikasi'];

    public function user_sispek()
    {
        return $this->hasMany('App\Model\user_sispek');
    }
}
