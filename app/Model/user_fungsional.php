<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user_fungsional extends Model
{
    protected $table = 'user_fungsional';

    protected $fillable = ['user_id','m_akses_aplikasi_id','m_akses_fitur_id'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function m_akses_fitur()
    {
        return $this->belongsTo('App\Model\m_akses_fitur');
    }

    public function m_akses_aplikasi()
    {
        return $this->belongsTo('App\Model\m_akses_aplikasi');
    }  

}
