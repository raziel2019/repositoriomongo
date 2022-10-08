<?php

namespace App\Http\Controllers;
use Image;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.perfil');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
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
      
        $user =  User::find($id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->division = $request->division;
        $user->programa = $request->programa;
        $user->sei = $request->sei;
        $user->prodep = $request->prodep;
        $user->grado = $request->grado; 
        $user->curp = $request->curp;
        $user->rfc = $request->rfc;
        $user->especialidad = $request->especialidad;
        $user->cat_profesor = $request->cat_profesor;
       // $user->password = $request->password;
        if($request->hasfile('avatar')){

            $avatar = $request->file('avatar');
            $extension = $avatar->getClientOriginalExtension();
            $nombre = time() . '.' . $extension;
            $avatar->move('photo/profile/' , $nombre);
            
            $user->avatar=$nombre;
         
        }
        $user->save(); 
        return redirect()->route('usuario.index')
        ->with('Muy Bien','Sus datos han sido Editados Satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
