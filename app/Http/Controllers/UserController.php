<?php

namespace App\Http\Controllers;

use App\Models\User;
use PDF;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }

    public function getAllUsers() {
        $users = User::all();
        return view('users.user', compact('users'));
    }

    public function downloadPDF() {
        $users = User::all();
        $pdf = PDF::loadView('users.user', compact('users'));
        return $pdf->download('users-export.pdf');
    }
}
