<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\m_akses_aplikasi;
use App\Model\m_akses_fitur;
use App\Model\m_pengawas;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $fitur['fitur'] = m_akses_fitur::all();
        return view('dashboard');
    }
}
