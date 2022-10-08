<?php

namespace App\Http\Controllers;

use App\Document;
use App\Material;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*Filtros de Busqueda */
    public function Adminsearch(Request $request){
        $Adminsearch = $request->get('Adminsearch'); 
        $users=User::where('name','like',"%$Adminsearch%")
            ->orWhere('email','like',"%$Adminsearch%")
            ->orWhere('cat_profesor','like',"%$Adminsearch%")
            ->orWhere('division','like',"%$Adminsearch%")
            ->orWhere('created_at','like',"%$Adminsearch%")
           ->get();

        return view('Administrador.GestionUsuarios',compact('users'));
    }
  

    public function PorDivision(Request $request){
        $division = $request->get('division');      
        $users=User::where('division','like',"%$division%")->orderBy('id', 'DESC')->get();

        return view('Administrador.GestionUsuarios',compact('users'));
    }
    public function PorNombre(Request $request){
        $nombre = $request->get('nombre');      
        $users=User::where('name','like',"%$nombre%")->orderBy('id', 'DESC')->get();

        return view('Administrador.GestionUsuarios',compact('users'));
    }


    public function index()
    {
        $material = Material::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->latest()->take(3)->get();
        $users = User::all();
        return view('Administrador.Dashboard', compact('material','users'));
      }
      public function principal()
      {
          $material = Material::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->latest()->take(3)->get();
          $users = User::all();
          return view('Administrador.Dashboard', compact('material','users'));
        }

      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $data=User::find($id);
        return view('Administrador.ViewUser',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('Administrador.EditUser', compact('data'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'division'=>'required',
            'programa'=>'required',
            'sei'=>'required',
            'prodep'=>'required',
            'grado'=>'required',
            'curp'=>'required',
            'rfc'=>'required',
            'cat_profesor'=>'required',
            'password'=>'required'
        ]);

        $data = User::find($id);
        $data->name =  $request->get('name');
        $data->email = $request->get('email');
        $data->division = $request->get('division');
        $data->programa = $request->get('programa');
        $data->sei = $request->get('sei');
        $data->prodep = $request->get('prodep');
        $data->grado = $request->get('grado');
        $data->curp = $request->get('curp');
        $data->rfc = $request->get('rfc');
        $data->cat_profesor = $request->get('cat_profesor');
        $data->password = bcrypt( $request->get('password') );
        $data->save();

        return redirect('/AdminUsuarios')->with('Genial', 'Usuario Actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/AdminUsuarios');
    }
    public function usuarios()
    {
        $users = User::all();
        return view('Administrador.GestionUsuarios',compact('users') );
    }

}
