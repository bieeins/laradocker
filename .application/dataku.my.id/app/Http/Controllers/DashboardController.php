<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $getAll = User::all()->first();
        // dd($getAll);
        return view('tes', compact('getAll'));
    }
}
