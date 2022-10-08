<?php

namespace App\Http\Controllers;
use App\Document;
use App\Asesoria;
use App\GestionAcademica;
use App\Material;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $file = Asesoria::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->latest()->take(3)->get();
       // $count = Asesoria::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->count();
        $material = Material::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->latest()->take(3)->get();
        $gestion = GestionAcademica::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->latest()->take(3)->get();
      
        return view('home', compact('gestion','file','material') );
    }
}
