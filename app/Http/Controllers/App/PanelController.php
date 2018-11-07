<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class PanelController extends Controller
{
    public function index()
    {
    	$title = 'Inicio';
    	$users = User::paginate(20);

        return view('app/panel', compact('title','users'));
    }

}
