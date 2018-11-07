<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function contact(Request $request)
    {

        Mail::to("jimenezleonardop@gmail.com")->send(new Contact($request->name, $request->email, $request->message));
        //Mail::to("jimenezleonardop@gmail.com")->send(new Contact("asdas", "asdas", "asdas"));

        flash()->overlay('Mensaje enviado');

        return redirect("/");
    }
}
