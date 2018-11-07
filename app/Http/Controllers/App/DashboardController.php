<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
	

    public function index(Request $request)
    {
    	$title = 'Inicio';

        return view('home', compact('title'));
    }

}
