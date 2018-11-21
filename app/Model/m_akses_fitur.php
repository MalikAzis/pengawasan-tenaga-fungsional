<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class m_akses_fitur extends Model
{
    protected $table = 'm_akses_fitur';

    protected $fillable = ['akses_fitur'];

    public function user_sispek()
    {
        return $this->hasMany('App\Model\user_sispek');
    }
}
