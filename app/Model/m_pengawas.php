<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class m_pengawas extends Model
{
    protected $table = ['m_pengawas'];

    protected $guarded = ['created_at', 'updated_at'];

    public function pangkat()
    {
        return $this->hasOne('App\Model\m_pangkat');
    }

    public function jabatan()
    {
        return $this->hasOne('App\Model\m_jabatan');
    }

}
