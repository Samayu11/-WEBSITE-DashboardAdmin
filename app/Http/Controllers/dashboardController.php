<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Support\Facades\DB;
use App\Models\Students;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function murid(){
        $totalMurid = Students::count();
        $totalGuru = Kelas::count();
        return view('dashboard', compact('totalMurid', 'totalGuru'));
    }
}
