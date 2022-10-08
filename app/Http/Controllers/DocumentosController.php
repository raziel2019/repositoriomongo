<?php

namespace App\Http\Controllers;

use App\Document;
use App\User;
use App\Asesoria;

use App\Material;
use App\Proyecto;
use App\ArticuloRevista;
use App\ArticuloArbitrado;
use App\Libro;
use App\ArticuloDifusion;
use App\CapacitacionDocente;
use App\CuerpoAcademico;
use App\Direccion;
use App\Docencia;
use App\EstadiaEmpresa;
use App\GestionAcademica;
use App\InformeTecnico;
use App\TutoriaGrupal;
use App\TutoriaIndividual;
use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function search(Request $request){
        $search = $request->get('search');
        $file = Asesoria::where('titulo','like',"%$search%")->where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

        if($search == $file){
            return view('pdf.academica.Asesoria.ListadoAsesoria',compact('file'));
        }
      
        /*
        
        $books = Book::with(['language', 'user', 'authors', 'publishers', 'genres'])->get();

        $search = $request->get('search'); 
        
        $file=Document::where('titulo','like',"%$search%")
            ->orWhere('autor','like',"%$search%")
            ->orWhere('tipo','like',"%$search%")
            ->orWhere('cuatrimestre','like',"%$search%")
            ->orWhere('created_at','like',"%$search%")
           ->where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();;

        return view('documentos.index',compact('file'));
    */
    }
  
    public function fechas(Request $request){
        $fechas = $request->get('fechas');      
        $file=Document::where('cuatrimestre','like',"%$fechas%")->where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

        return view('documentos.index',compact('file'));
    }
    public function fechaActual(Request $request){
        $fechaActual = $request->get('fechaActual');      
        $file=Document::where('created_at','like',"%$fechaActual%")->where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

        return view('documentos.index',compact('file'));
    }
    public function index()
    {   
        $file = Document::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('documentos.index')->with($data);
    }
    public function Supervisor_index()
    {   
      $users = User::all();
      return view('supervisor.dashboard', compact('users'));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(){
        return view('documentos.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(User $user, Request $request){
        $data = new Document;

        if($request->file('file'))
        {
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('../storage/' , $filename);

            $data->file=$filename;
        }
        $data->user_id = auth()->id();
        $data->titulo=$request->titulo;
        $data->autor=$request->autor;
        $data->descripcion=$request->descripcion;
        $data->tipo=$request->tipo;
        $data->cuatrimestre=$request->cuatrimestre;
      //  $data->User()->associate($user)->save();
        $data->save();

        return redirect()->route('archivos.index');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id){
        $data=Document::find($id);

        return view('documentos.view',compact('data'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function download($file){
        return response()->download('storage/' .$file);
    }

    public function edit($id){
    //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
    //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id){
        $data = Document::find($id);
        $data->delete();

        return redirect()->route('archivos.index');
    }

    public function InformeAsesoria(Request $request ){

$selecciones = $request->seleccion;
if($selecciones){
    $selecciones = Asesoria::find($request->seleccion);

//    $data = Asesoria::find($id);
    $pdf = PDF::loadView('pdf.academica.Asesoria.InformeAsesoria', $selecciones);

    return $pdf->download('Asesoria.pdf');

  //  return view('pdf.academica.Asesoria.InformeAsesoria',compact('selecciones'));
    }else{
         return back();
        }
    }
    public function asesoria_supervisor_index(){
      $file = Asesoria::all();
      return view('supervisor.academica.Asesoria.ListadoAsesoria', compact('file'));
    }
    public function material_supervisor_index(){
      $file = Material::all();
      return view('supervisor.academica.Material.ListadoMaterial', compact('file'));
    }
    public function proyecto_supervisor_index(){
      $file = Proyecto::all();
      return view('supervisor.academica.Proyecto.ListadoProyecto', compact('file'));
    }
    
    public function difusion_supervisor_index(){
      $file = ArticuloDifusion::all();
      return view('supervisor.academica.Difusion.ListadoDifusion', compact('file'));
    }
    public function revista_supervisor_index(){
      $file = ArticuloRevista::all();
      return view('supervisor.academica.Revista.ListadoRevista', compact('file'));
    }
    public function arbitrado_supervisor_index(){
      $file = ArticuloArbitrado::all();
      return view('supervisor.academica.Arbitrado.ListadoArbitrado', compact('file'));
    }
    public function libro_supervisor_index(){
      $file = Libro::all();
      return view('supervisor.academica.Libro.ListadoLibro', compact('file'));
    }
    public function informeTecnico_supervisor_index(){
      $file = InformeTecnico::all();
      return view('supervisor.academica.InformeTecnico.ListadoInformeTecnico', compact('file'));
    }

    public function capacitacion_supervisor_index(){
      $file = CapacitacionDocente::all();
      return view('supervisor.docencia.Capacitacion.ListadoCapacitacion', compact('file'));
    }
    // public function capDiplomado_supervisor_index(){
    //   $file = Material::all();
    //   return view('supervisor.academica.Material.ListadoMaterial', compact('file'));
    // }
    public function cuerpoAcademico_supervisor_index(){
      $file = CuerpoAcademico::all();
      return view('supervisor.docencia.CuerpoAcademico.ListadoCuerpoAcademico', compact('file'));
    }
    
    public function curso_supervisor_index(){
      $file = Docencia::all();
      return view('supervisor.docencia.Curso.ListadoCurso', compact('file'));
    }
    public function direccion_supervisor_index(){
      $file = Direccion::all();
      return view('supervisor.docencia.Direccion.ListadoDireccion', compact('file'));
    }
    public function estadia_supervisor_index(){
      $file = EstadiaEmpresa::all();
      return view('supervisor.docencia.Estadia.ListadoEstadia', compact('file'));
    }
    public function gestionAcademica_supervisor_index(){
      $file = GestionAcademica::all();
      return view('supervisor.docencia.GestionAcademica.ListadoGestionAcademica', compact('file'));
    }
    public function tutoria_supervisor_index(){
      $file = TutoriaIndividual::all();
      return view('supervisor.docencia.Tutoria.ListadoTutoria', compact('file'));
    }
    public function tutoriaGrupal_supervisor_index(){
      $file = TutoriaGrupal::all();
      return view('supervisor.docencia.TutoriaGrupal.ListadoTutoriaGrupal', compact('file'));
    }


    public function busqueda(Request $request, Asesoria $file){

  $cuatri = $request->get('cuatrimestre');
  $años = $request->get('año');

  $file=Asesoria::where('cuatrimestre','like',"%$cuatri%")
  ->where('created_at','like',"%$años%")
  ->where('user_id', auth()->user()->id)
  ->orderBy('id', 'DESC')
  ->get();

  return view('pdf.academica.Asesoria.ListadoAsesoria',compact('file'));
  
    }
    public function busquedaMaterial(Request $request, Material $file){

        $cuatri = $request->get('cuatrimestre');
        $años = $request->get('año');
      
        $file=Material::where('cuatrimestre','like',"%$cuatri%")
        ->where('created_at','like',"%$años%")
        ->where('user_id', auth()->user()->id)
        ->orderBy('id', 'DESC')
        ->get();
      
        return view('pdf.academica.Material.ListadoMaterial',compact('file'));
        
          }

          public function busquedaProyecto(Request $request, Proyecto $file){

            $cuatri = $request->get('cuatrimestre');
            $años = $request->get('año');
          
            $file=Proyecto::where('cuatrimestre','like',"%$cuatri%")
            ->where('created_at','like',"%$años%")
            ->where('user_id', auth()->user()->id)
            ->orderBy('id', 'DESC')
            ->get();
          
            return view('pdf.academica.Proyecto.ListadoProyecto',compact('file'));
            
              }
              public function busquedaRevista(Request $request, ArticuloRevista $file){

                $cuatri = $request->get('cuatrimestre');
                $años = $request->get('año');
              
                $file=ArticuloRevista::where('cuatrimestre','like',"%$cuatri%")
                ->where('created_at','like',"%$años%")
                ->where('user_id', auth()->user()->id)
                ->orderBy('id', 'DESC')
                ->get();
              
                return view('pdf.academica.Revista.ListadoRevista',compact('file'));
                
                  }
                  public function busquedaArbitrado(Request $request, ArticuloArbitrado $file){

                    $cuatri = $request->get('cuatrimestre');
                    $años = $request->get('año');
                  
                    $file=ArticuloArbitrado::where('cuatrimestre','like',"%$cuatri%")
                    ->where('created_at','like',"%$años%")
                    ->where('user_id', auth()->user()->id)
                    ->orderBy('id', 'DESC')
                    ->get();
                  
                    return view('pdf.academica.Arbitrado.ListadoArbitrado',compact('file'));
                    
                      }
                      public function busquedaLibro(Request $request, Libro $file){

                        $cuatri = $request->get('cuatrimestre');
                        $años = $request->get('año');
                      
                        $file=Libro::where('cuatrimestre','like',"%$cuatri%")
                        ->where('created_at','like',"%$años%")
                        ->where('user_id', auth()->user()->id)
                        ->orderBy('id', 'DESC')
                        ->get();
                      
                        return view('pdf.academica.Libro.ListadoLibro',compact('file'));
                        
                          }
                          public function busquedaInformeTecnico(Request $request, InformeTecnico $file){

                            $cuatri = $request->get('cuatrimestre');
                            $años = $request->get('año');
                          
                            $file=InformeTecnico::where('cuatrimestre','like',"%$cuatri%")
                            ->where('created_at','like',"%$años%")
                            ->where('user_id', auth()->user()->id)
                            ->orderBy('id', 'DESC')
                            ->get();
                          
                            return view('pdf.academica.InformeTecnico.ListadoInformeTecnico',compact('file'));
                            
                              }
              
                              public function busquedaDifusion(Request $request, ArticuloDifusion $file){

                                $cuatri = $request->get('cuatrimestre');
                                $años = $request->get('año');
                              
                                $file=ArticuloDifusion::where('cuatrimestre','like',"%$cuatri%")
                                ->where('created_at','like',"%$años%")
                                ->where('user_id', auth()->user()->id)
                                ->orderBy('id', 'DESC')
                                ->get();
                              
                                return view('pdf.academica.Difusion.ListadoDifusion',compact('file'));
                                
                                  }
                                  public function busquedaGestion(Request $request, GestionAcademica $file){

                                    $cuatri = $request->get('cuatrimestre');
                                    $años = $request->get('año');
                                  
                                    $file=GestionAcademica::where('cuatrimestre','like',"%$cuatri%")
                                    ->where('created_at','like',"%$años%")
                                    ->where('user_id', auth()->user()->id)
                                    ->orderBy('id', 'DESC')
                                    ->get();
                                  
                                    return view('pdf.docencia.GestionAcademica.ListadoGestionAcademica',compact('file'));
                                    
                                      }
                                      public function busquedaTutoriaG(Request $request, TutoriaGrupal $file){

                                        $cuatri = $request->get('cuatrimestre');
                                        $años = $request->get('año');
                                      
                                        $file=TutoriaGrupal::where('cuatrimestre','like',"%$cuatri%")
                                        ->where('created_at','like',"%$años%")
                                        ->where('user_id', auth()->user()->id)
                                        ->orderBy('id', 'DESC')
                                        ->get();
                                      
                                        return view('pdf.docencia.TutoriaGrupal.ListadoTutoriaGrupal',compact('file'));
                                        
                                          }
                                          public function busquedaTutoria(Request $request, TutoriaIndividual $file){

                                            $cuatri = $request->get('cuatrimestre');
                                            $años = $request->get('año');
                                          
                                            $file=TutoriaIndividual::where('cuatrimestre','like',"%$cuatri%")
                                            ->where('created_at','like',"%$años%")
                                            ->where('user_id', auth()->user()->id)
                                            ->orderBy('id', 'DESC')
                                            ->get();
                                          
                                            return view('pdf.docencia.Tutoria.ListadoTutoria',compact('file'));
                                            
                                              }
                                              public function busquedaCurso(Request $request, Docencia $file){

                                                $cuatri = $request->get('cuatrimestre');
                                                $años = $request->get('año');
                                              
                                                $file=Docencia::where('cuatrimestre','like',"%$cuatri%")
                                                ->where('created_at','like',"%$años%")
                                                ->where('user_id', auth()->user()->id)
                                                ->orderBy('id', 'DESC')
                                                ->get();
                                              
                                                return view('pdf.docencia.Curso.ListadoCurso',compact('file'));
                                                
                                                  }
                                                  public function busquedaDireccion(Request $request, Direccion $file){

                                                    $cuatri = $request->get('cuatrimestre');
                                                    $años = $request->get('año');
                                                  
                                                    $file=Direccion::where('cuatrimestre','like',"%$cuatri%")
                                                    ->where('created_at','like',"%$años%")
                                                    ->where('user_id', auth()->user()->id)
                                                    ->orderBy('id', 'DESC')
                                                    ->get();
                                                  
                                                    return view('pdf.docencia.Direccion.ListadoDireccion',compact('file'));
                                                    
                                                      }
                                                      public function busquedaEstadia(Request $request, EstadiaEmpresa $file){

                                                        $cuatri = $request->get('cuatrimestre');
                                                        $años = $request->get('año');
                                                      
                                                        $file=EstadiaEmpresa::where('cuatrimestre','like',"%$cuatri%")
                                                        ->where('created_at','like',"%$años%")
                                                        ->where('user_id', auth()->user()->id)
                                                        ->orderBy('id', 'DESC')
                                                        ->get();
                                                      
                                                        return view('pdf.docencia.Estadia.ListadoEstadia',compact('file'));
                                                        
                                                          }
                                                          public function busquedaCuerpo(Request $request, CuerpoAcademico $file){

                                                            $cuatri = $request->get('cuatrimestre');
                                                            $años = $request->get('año');
                                                          
                                                            $file=CuerpoAcademico::where('cuatrimestre','like',"%$cuatri%")
                                                            ->where('created_at','like',"%$años%")
                                                            ->where('user_id', auth()->user()->id)
                                                            ->orderBy('id', 'DESC')
                                                            ->get();
                                                          
                                                            return view('pdf.docencia.CuerpoAcademico.ListadoCuerpoAcademico',compact('file'));
                                                            
                                                              }
                                                              public function busquedaCapacitacion(Request $request, CapacitacionDocente $file){

                                                                $cuatri = $request->get('cuatrimestre');
                                                                $años = $request->get('año');
                                                              
                                                                $file=CapacitacionDocente::where('cuatrimestre','like',"%$cuatri%")
                                                                ->where('created_at','like',"%$años%")
                                                                ->where('user_id', auth()->user()->id)
                                                                ->orderBy('id', 'DESC')
                                                                ->get();
                                                              
                                                                return view('pdf.docencia.Capacitacion.ListadoCapacitacion',compact('file'));
                                                                
                                                                  }

}