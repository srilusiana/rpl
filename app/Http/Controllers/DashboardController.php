<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('components.pengguna.show'); // File Blade di folder resources/views/pages
    }

    public function dataKesehatan() {
        return view('components.data.dashboard');
    }

    public function statistik() {
        return view('components.statistik.dashboard');
    }

    public function parameter() {
        return view('components.parameter.dashboard');
    }

    public function logout() {
        // Tambahkan logika logout jika diperlukan
        auth()->logout();
        return redirect('/login');
    }
}
