<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Pdef;
use App\Document;
use App\Asesoria;
use App\Material;
use App\Proyecto;
use App\ArticuloRevista;
use App\ArticuloDifusion;
use App\ArticuloArbitrado;
use App\Libro;
use App\InformeTecnico;
use App\User;
use App\GestionAcademica;
use App\TutoriaIndividual;
use App\TutoriaGrupal;
use App\CapacitacionDocente;
use App\EstadiaEmpresa;
use App\Docencia;
use App\Direccion;
use App\CuerpoAcademico;

class PdfController extends Controller
{
  //Metodos PDF 
  public function pdfForm(){
    return view('expedientes.create');
  }

  public function pdfDownload(Request $request){
    request()->validate([
      'Titulo' => 'required',
      'Asunto' => 'required',
      'Date' => 'required',
      'Descripcion' => 'required',
      'Docente' => 'required',
      'Area' => 'required'
    ]);

    Pdef::create([
      'titulo' => $request->Titulo,
      'asunto' => $request->Asunto,
      'date' => $request->Date,
      'descripcion' => $request->Descripcion,
      'docente' => $request->Docente,
      'area' => $request->Area,
      'tip' => "material",
      'user_id' => auth()->id(),
    ]);

    $data = [
      'titulo' => $request->Titulo,
      'asunto' => $request->Asunto,
      'date' => $request->Date,
      'descripcion' => $request->Descripcion,
      'docente' => $request->Docente,
      'area' => $request->Area
    ];

    $pdf = PDF::loadView('pdf_download', $data);

    return $pdf->stream('informe.pdf');
  }
  //PDF Articulo
  public function pdfFormArticulo(){
    return view('pdf.academica.Articulo');
  }

  //Arbitado
  public function arbitrado_show($id){
    $data = ArticuloArbitrado::find($id);

    return view('pdf.academica.Arbitrado.VistaArbitrado', $data);
  }

  public function arbitrado_index(){
    $file = ArticuloArbitrado::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.academica.Arbitrado.ListadoArbitrado', compact('file'));
  }

  public function arbitrado_create(){
    return view('pdf.academica.Arbitrado.CrearArbitrado');
  }

  public function arbitrado_edit($id){ 
    $data = ArticuloArbitrado::find($id);

    return view('pdf.academica.Arbitrado.EditarArbitrado', compact('data'));  
  }

  public function arbitrado_update(Request $request, $id){
    $data = ArticuloArbitrado::find($id);
    $data->autor = $request->autor;
    $data->titulo = $request->titulo;
    $data->estado = $request->estado;
    $data->pais = $request->pais;
    $data->nombre = $request->nombre;
    $data->editorial = $request->editorial;
    $data->volumen = $request->volumen;
    $data->issn = $request->issn;
    $data->proposito = $request->proposito;
    $data->cv = $request->cv;
    $data->miembros = $request->miembros;
    $data->lgacs = $request->lgacs;
    $data->date = $request->date;
    $data->save();

    return redirect('/arbitrado/list');
  }

  public function arbitrado_destroy($id){
    $data = ArticuloArbitrado::find($id);
    $data->delete();

    return redirect('/arbitrado/list');
  }

  //PDF Arbitrado
  public function pdfFormArbitrado($id){
    $data = ArticuloArbitrado::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Arbitrado', $data);

    return $pdf->download('Articulo_Arbitrado.pdf');
  }
  public function pdfArbitrado($file){
    return response()->download( public_path("storage/{$file}" ));
  }

  public function arbitrado_store(Request $request){
    request()->validate([
      'autor' => 'required',
      'titulo' => 'required',
      'cuatrimestre' => 'required',
      'estado' => 'required',
      'pais' => 'required',
      'nombre' => 'required',
      'editorial' => 'required',
      'volumen' => 'required',
      'issn' => 'required',
      'proposito' => 'required',
      'cv' => 'required',
      'miembros' => 'required',
      'lgacs' => 'required',
      'date' => 'required',
      'file' => 'required',
    ]);
    
    $art = new ArticuloArbitrado;
    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Articulo_Arbitrado_'.$request->nombre.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $art->file=$filename;
    }

    $art->user_id = auth()->id();
    $art->autor = $request->autor;
    $art->titulo = $request->titulo;
    $art->cuatrimestre = $request->cuatrimestre;
    $art->estado = $request->estado;
    $art->pais = $request->pais;
    $art->nombre = $request->nombre;
    $art->editorial = $request->editorial;
    $art->volumen = $request->volumen;
    $art->issn = $request->issn;
    $art->proposito = $request->proposito;
    $art->cv = $request->cv;
    $art->miembros = $request->miembros;
    $art->lgacs = $request->lgacs;
    $art->date = $request->date;
    $art->save();

    return redirect('/arbitrado/list');
  }
  //PDF Difusion
  public function difusion_show($id){
    $data = ArticuloDifusion::find($id);

    return view('pdf.academica.Difusion.VistaDifusion', $data);
  }

  public function difusion_index(){
    $file = ArticuloDifusion::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.academica.Difusion.ListadoDifusion', compact('file'));
  }
  public function difusion_create(){
    return view('pdf.academica.Difusion.CrearDifusion');
  }

  public function difusion_edit($id){ 
    $data = ArticuloDifusion::find($id);
    return view('pdf.academica.Difusion.EditarDifusion', compact('data'));  
  }

  public function difusion_update(Request $request, $id){
    $data = ArticuloDifusion::find($id);
    $data->autor = $request->autor;
    $data->titulo = $request->titulo;
    $data->cuatrimestre = $request->cuatrimestre;
    $data->estado = $request->estado;
    $data->pais = $request->pais;
    $data->nombre = $request->nombre;
    $data->editorial = $request->editorial;
    $data->volumen = $request->volumen;
    $data->issn = $request->issn;
    $data->proposito = $request->proposito;
    $data->considerar = $request->considerar;
    $data->miembros = $request->miembros;
    $data->lgacs = $request->lgacs;
    $data->date = $request->date;
    $data->save();

    return redirect('/difusion/list');
  }

  public function difusion_destroy($id){
    $data = ArticuloDifusion::find($id);
    $data->delete();
    return redirect('/difusion/list');
  }

  public function pdfFormDifusion($id){
    $data = ArticuloDifusion::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Articulo', $data);

    return $pdf->download('Articulo_Difusion.pdf');
  }
  public function pdfDifusion($file){
    return response()->download( public_path("storage/{$file}" ));
  }

  public function difusion_store(Request $request){
    request()->validate([
      'autor' => 'required',
      'titulo' => 'required',
      'cuatrimestre' => 'required',
      'estado' => 'required',
      'pais' => 'required',
      'nombre' => 'required',
      'editorial' => 'required',
      'volumen' => 'required',
      'issn' => 'required',
      'proposito' => 'required',
      'considerar' => 'required',
      'miembros' => 'required',
      'lgacs' => 'required',
      'date' => 'required',
      'file' => 'required',
    ]);

    
    $art = new ArticuloDifusion;
    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Articulo_Difusion_'.$request->nombre.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $art->file=$filename;
    }
    $art->user_id = auth()->id();
    $art->autor = $request->autor;
    $art->titulo = $request->titulo;
    $art->cuatrimestre = $request->cuatrimestre;
    $art->estado = $request->estado;
    $art->pais = $request->pais;
    $art->nombre = $request->nombre;
    $art->editorial = $request->editorial;
    $art->volumen = $request->volumen;
    $art->issn = $request->issn;
    $art->proposito = $request->proposito;
    $art->considerar = $request->considerar;
    $art->miembros = $request->miembros;
    $art->lgacs = $request->lgacs;
    $art->date = $request->date;
    $art->save();
    return redirect('/difusion/list');
  }

  //Revista
  public function revista_show($id){
    $data = ArticuloRevista::find($id);

    return view('pdf.academica.Revista.VistaRevista', $data);
  }

  public function revista_index(){
    $file = ArticuloRevista::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.academica.Revista.ListadoRevista', compact('file'));
  }

  public function revista_create(){
    return view('pdf.academica.Revista.CrearRevista');
  }

  public function revista_edit($id){ 
    $data = ArticuloRevista::find($id);

    return view('pdf.academica.Revista.EditarRevista', compact('data'));  
  }

  public function revista_update(Request $request, $id){
    $data = ArticuloRevista::find($id);
    $data->autor = $request->autor;
    $data->titulo = $request->titulo;
    $data->descripcion = $request->descripcion;
    $data->estado = $request->estado;
    $data->pais = $request->pais;
    $data->nombre = $request->nombre;
    $data->editorial = $request->editorial;
    $data->pagina = $request->pagina;
    $data->pagina2 = $request->pagina2;
    $data->volumen = $request->volumen;
    $data->indice = $request->indice;
    $data->issn = $request->issn;
    $data->direccion = $request->direccion;
    $data->proposito = $request->proposito;
    $data->curriculum_de_cuerpo_academico = $request->curriculum_de_cuerpo_academico;
    $data->miembros = $request->autor;
    $data->lgacs = $request->lgacs;
    $data->date = $request->date;
    //$ges->pdf = $name;
    $data->save();

    return redirect('/revista/list');
  }

  public function revista_destroy($id){
    $data = ArticuloRevista::find($id);
    $data->delete();

    return redirect('/revista/list');
  }
  //PDF Revista PDF
  public function pdfFormRevista($id){
    $data = ArticuloRevista::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Revista', $data);

    return $pdf->download('Articulo_De_Revista.pdf');
  }

  public function revista_store(Request $request){
    request()->validate([
      'autor' => 'required',
      'titulo' => 'required',
      'cuatrimestre' => 'required',
      'descripcion' =>'required',
      'estado' => 'required',
      'pais' => 'required',
      'nombre' => 'required',
      'editorial' => 'required',
      'pagina' => 'required',
      'pagina2' => 'required',
      'volumen' => 'required',
      'indice' => 'required',
      'issn' => 'required',
      'direccion' => 'required',
      'proposito' => 'required',
      'curriculum_de_cuerpo_academico' => 'required',
      'miembros' => 'required',
      'lgacs' => 'required',
      'date' => 'required',
      'file' => 'required',
    ]);
    $art = new ArticuloRevista ;
    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Articulo_Revista_'.$request->nombre.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $art->file=$filename;
    }
    $art->user_id = auth()->id();
    $art->autor = $request->autor;
    $art->titulo = $request->titulo;
    $art->cuatrimestre = $request->cuatrimestre;
    $art->descripcion = $request->descripcion;
    $art->estado = $request->estado;
    $art->pais = $request->pais;
    $art->nombre = $request->nombre;
    $art->editorial = $request->editorial;
    $art->pagina = $request->pagina;
    $art->pagina2 = $request->pagina2;
    $art->volumen = $request->volumen;
    $art->indice = $request->indice;
    $art->issn = $request->issn;
    $art->direccion = $request->direccion;
    $art->proposito = $request->proposito;
    $art->curriculum_de_cuerpo_academico = $request->curriculum_de_cuerpo_academico;
    $art->miembros = $request->autor;
    $art->lgacs = $request->lgacs;
    $art->date = $request->date;
    $art->save();

    return redirect('/revista/list');
  }
  public function pdfRevista($file){
    return response()->download( public_path("storage/{$file}" ));
  }

  // Asesoria
  public function asesoria_show($id){
    $data = Asesoria::find($id);

    return view('pdf.academica.Asesoria.VistaAsesoria', $data);
  }

  public function asesoria_index(){
    $file = Asesoria::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.academica.Asesoria.ListadoAsesoria', compact('file'));
  }

  public function asesoria_create(){
    return view('pdf.academica.Asesoria.CrearAsesoria');
  }

  public function asesoria_edit($id){ 
    $data = Asesoria::find($id);

    return view('pdf.academica.Asesoria.EditarAsesoria', compact('data'));  
  }

  public function asesoria_update(Request $request, $id){
    $data = Asesoria::find($id);
    $data->nombre = $request->nombre;
    $data->alcance = $request->alcance;
    $data->empresa = $request->empresa;
    $data->pais = $request->pais;
    $data->estado = $request->estado;
    $data->investigadores = $request->investigadores;
    $data->curriculum_de_cuerpo_academico = $request->curriculum_de_cuerpo_academico;
    $data->miembros = $request->miembros;
    $data->lgacs = $request->lgacs;
    $data->fecha = $request->fecha;
    $data->save();

    return redirect('/asesoria/list');
  }

  public function asesoria_destroy($id){
    $data = Asesoria::find($id);
       return redirect('/asesoria/list');
  }

  public function asesoria_store(Request $request){
    request()->validate([
      'nombre' => 'required',
      'alcance' => 'required',
      'empresa' => 'required',
      'pais' => 'required',
      'estado' => 'required',
      'investigadores' => 'required',
      'curriculum_de_cuerpo_academico' => 'required',
      'miembros' => 'required',
      'lgacs' => 'required',
      'fecha' => 'required',
      'cuatrimestre' => 'required',
      'file' => 'required',
    ]);

    $ase = new Asesoria;

    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Asesoria_'.$request->nombre.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $ase->file=$filename;
    }

    $ase->user_id = auth()->id();
    $ase->nombre = $request->nombre;
    $ase->alcance = $request->alcance;
    $ase->empresa = $request->empresa;
    $ase->pais = $request->pais;
    $ase->estado = $request->estado;
    $ase->investigadores = $request->investigadores;
    $ase->curriculum_de_cuerpo_academico = $request->curriculum_de_cuerpo_academico;
    $ase->miembros = $request->miembros;
    $ase->cuatrimestre = $request->cuatrimestre;
    $ase->lgacs = $request->lgacs;
    $ase->fecha = $request->fecha;
    $ase->save();

    return redirect('/asesoria/list');
  }

  //PDF Asesoria
  public function pdfFormAsesoria($id){
    $data = Asesoria::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Asesorias', $data);

    return $pdf->download('Asesoria.pdf');
  }

  //Informe Asesoria
    public function InformeAsesoria(Request $request, $selecciones ){
    if($request->seleccion){
        $selecciones = Asesoria::find($request->seleccion );
        $pdf = PDF::loadView('pdf.academica.Asesoria.InformeAsesoria', compact('selecciones'));
        return $pdf->stream('InformeAsesoria.pdf');
        }else{
             return back();
            }
         
        }
          //Informe Material
    public function InformeMaterial(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = Material::find($request->seleccion );
          $pdf = PDF::loadView('pdf.academica.Material.InformeMaterial', compact('selecciones'));
          return $pdf->stream('InformeMaterial.pdf');
          }else{
               return back();
              }
          }
          //Informe Proyecto
    public function InformeProyecto(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = Proyecto::find($request->seleccion );
          $pdf = PDF::loadView('pdf.academica.Proyecto.InformeProyecto', compact('selecciones'));
          return $pdf->stream('InformeProyecto.pdf');
          }else{
               return back();
              }
          }
          //Informe Articulo de difusion
    public function InformeDifusion(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = ArticuloDifusion::find($request->seleccion );
          $pdf = PDF::loadView('pdf.academica.Difusion.InformeDifusion', compact('selecciones'));
          return $pdf->stream('InformeDifusion.pdf');
          }else{
               return back();
              }
          }
          //Informe Articulo de Revista
    public function InformeRevista(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = ArticuloRevista::find($request->seleccion );
          $pdf = PDF::loadView('pdf.academica.Revista.InformeRevista', compact('selecciones'));
          return $pdf->stream('InformeRevista.pdf');
          }else{
               return back();
              }
          }
          //Informe Articulo Arbitrado
    public function InformeArbitrado(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = ArticuloArbitrado::find($request->seleccion );
          $pdf = PDF::loadView('pdf.academica.Arbitrado.InformeArbitrado', compact('selecciones'));
          return $pdf->stream('InformeArbitrado.pdf');
          }else{
               return back();
              }
          }
          //Informe Libro
    public function InformeLibro(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = Libro::find($request->seleccion );
          $pdf = PDF::loadView('pdf.academica.Libro.InformeLibro', compact('selecciones'));
          return $pdf->stream('InformeLibro.pdf');
          }else{
               return back();
              }
          }
          //Informe Informe Tecnico
    public function InformeTecnico(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = InformeTecnico::find($request->seleccion );
          $pdf = PDF::loadView('pdf.academica.InformeTecnico.InformeTecnico', compact('selecciones'));
          return $pdf->stream('InformeTecnico.pdf');
          }else{
               return back();
              }
          }
           //Informe Gestion Academica
    public function InformeGestion(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = GestionAcademica::find($request->seleccion );
          $pdf = PDF::loadView('pdf.docencia.GestionAcademica.InformeGestion', compact('selecciones'));
          return $pdf->stream('InformeGestionAcademica.pdf');
          }else{
               return back();
              }
          }
           //Informe Tutoria Grupal
    public function InformeGrupal(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = TutoriaGrupal::find($request->seleccion );
          $pdf = PDF::loadView('pdf.docencia.TutoriaGrupal.InformeGrupal', compact('selecciones'));
          return $pdf->stream('InformeTutoriaGrupal.pdf');
          }else{
               return back();
              }
          }
           //Informe Tutoria Individual
    public function InformeTutoria(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = TutoriaIndividual::find($request->seleccion );
          $pdf = PDF::loadView('pdf.docencia.Tutoria.InformeTutoria', compact('selecciones'));
          return $pdf->stream('InformeTutoriaIndividual.pdf');
          }else{
               return back();
              }
          }
           //Informe Docencia
    public function InformeCurso(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = Docencia::find($request->seleccion );
          $pdf = PDF::loadView('pdf.docencia.Curso.InformeDocencia', compact('selecciones'));
          return $pdf->stream('InformeDocencia.pdf');
          }else{
               return back();
              }
          }
           //Informe Informe Tecnico
    public function InformeDireccion(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = Direccion::find($request->seleccion );
          $pdf = PDF::loadView('pdf.docencia.Direccion.InformeDireccion', compact('selecciones'));
          return $pdf->stream('InformeDireccionIndividualizada.pdf');
          }else{
               return back();
              }
          }
           //Informe Informe Tecnico
    public function InformeEstadia(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = EstadiaEmpresa::find($request->seleccion );
          $pdf = PDF::loadView('pdf.docencia.Estadia.InformeEstadia', compact('selecciones'));
          return $pdf->stream('InformeEstadia.pdf');
          }else{
               return back();
              }
          }
           //Informe Informe cuerpo academico
    public function InformeCuerpo(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = cuerpoAcademico::find($request->seleccion );
          $pdf = PDF::loadView('pdf.docencia.CuerpoAcademico.InformeAcademico', compact('selecciones'));
          return $pdf->stream('InformeCuerpoAcademico.pdf');
          }else{
               return back();
              }
          }
           //Informe  Capacitacion
    public function InformeCapacitacion(Request $request, $selecciones ){
      if($request->seleccion){
          $selecciones = CapacitacionDocente::find($request->seleccion );
          $pdf = PDF::loadView('pdf.docencia.Capacitacion.InformeCapacitacion', compact('selecciones'));
          return $pdf->stream('InformeCapacitacion.pdf');
          }else{
               return back();
              }
          }

          //Informe  Capacitacion Diplomado
    // public function InformeCapDiplomado(Request $request, $selecciones ){
    //   if($request->seleccion){
    //       $selecciones = CapacitacionDiplomado::find($request->seleccion );
    //       $pdf = PDF::loadView('pdf.docencia.CapacitacionDiplomado.InformeCapDiplomado', compact('selecciones'));
    //       return $pdf->stream('InformeCapacitacionDiplomado.pdf');
    //       }else{
    //            return back();
    //           }
    //       }

  public function pdfAsesoria($file){
    return response()->download( public_path("storage/{$file}" ));
  }

  //PDF Capacitacion
  public function capacitacionDocente(Request $request){
    request()->validate([
      'nombre' => 'required',
      'tipo' => 'required',
      'cuatrimestre' => 'required',
      'descripcion' => 'required',
      'duracion' => 'required',
      'fecha' => 'required',
      'lugar' => 'required',
      'instructor' => 'required',
      'grupo' => 'required',
      'file' => 'required',
    ]);

    $cap = new CapacitacionDocente;

    $cap->user_id = auth()->id();
    $cap->nombre = $request->nombre;
    $cap->tipo = $request->tipo;
    $cap->cuatrimestre = $request->cuatrimestre;
    $cap->descripcion = $request->descripcion;
    $cap->duracion = $request->duracion;
    $cap->fecha = $request->fecha;
    $cap->lugar = $request->lugar;
    $cap->instructor = $request->instructor;
    $cap->grupo = $request->grupo;

    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Capacitacion_'.$request->nombre.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $cap->file=$filename;
    }
    
    $cap->save();

    return redirect('/capacitacion');
  }

  public function capacitacion_index(){
    $file = CapacitacionDocente::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.docencia.Capacitacion.ListadoCapacitacion', compact('file'));
  }

  public function capacitacion_create(){
    return view('pdf.docencia.Capacitacion.CrearCapacitacion');
  }

  public function capacitacion_show($capacitacion){
    $data = CapacitacionDocente::find($capacitacion);

    return view('pdf.docencia.Capacitacion.VistaCapacitacion', $data);
  }

  public function capacitacion_edit($capacitacion){
    $data = CapacitacionDocente::find($capacitacion);

    return view('pdf.docencia.Capacitacion.EditarCapacitacion', compact('data')); 
  }

  public function capacitacion_destroy($id){
    $data = CapacitacionDocente::find($id);
    $data->delete();

    return redirect('/capacitacion');
  }

  public function pdfFormCapacitacion($id){
    $data = CapacitacionDocente::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Capacitacion', $data);

    return $pdf->download('Capacitacion.pdf');
  }

  public function pdfCapacitacion($file){
    return response()->download( public_path("storage/{$file}" ));
  }

  public function capacitacion_update(Request $request, $capacitacion){
    $cap = CapacitacionDocente::find($capacitacion);

    if($request->file('file'))
    {
      $file = $request->file('file');
      $name = 'Capacitacion_'.$request->nombre.'_'.$request->tipo.'_'.time().'.'.$file->getClientOriginalExtension();
      $request->file->move('../storage/' , $name);
      $cap->file = $name;
    }

    $cap->nombre = $request->nombre;
    $cap->tipo = $request->tipo;
    $cap->descripcion = $request->descripcion;
    $cap->duracion = $request->duracion;
    $cap->fecha = $request->fecha;
    $cap->lugar = $request->lugar;
    $cap->instructor = $request->instructor;
    $cap->grupo = $request->grupo;
    $cap->save();

    return redirect('/capacitacion');
  }

  //Capacitacion Diplomado
  // public function capacitacionDiplomado(Request $request){
  //   request()->validate([
  //     'nombre' => 'required',
  //     'tipo' => 'required',
  //     'descripcion' => 'required',
  //     'duracion' => 'required',
  //     'lugar' => 'required',
  //     'contenido' => 'required',
  //     'file' => 'required',
  //   ]);

  //   $cap = new CapacitacionDiplomado;
  //   $cap->user_id = auth()->id();
  //   $cap->nombre = $request->nombre;
  //   $cap->tipo = $request->tipo;
  //   $cap->descripcion = $request->descripcion;
  //   $cap->duracion = $request->duracion;
  //   $cap->lugar = $request->lugar;
  //   $cap->contenido = $request->contenido;

  //   if($request->file('file'))
  //   {
  //     $file=$request->file('file');
  //     $name = 'Capacitacion_'.$request->nombre.'_'.$request->tipo.'_'.time().'.'.$file->getClientOriginalExtension();
  //     $request->file->move('storage/' , $filename);

  //     $cap->file=$filename;
  //   }
    
  //   $cap->save();

  //   return redirect('/capDiplomado');
  // }

  // public function capDiplomado_index(){
  //   $file = CapacitacionDiplomado::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

  //   return view('pdf.docencia.CapacitacionDiplomado.ListadoCapDiplomado', compact('file'));
  // }

  // public function capDiplomado_create(){
  //   return view('pdf.docencia.CapacitacionDiplomado.CrearCapDiplomado');
  // }

  // public function capDiplomado_show($capacitacion){
  //   $data = CapacitacionDiplomado::find($capacitacion);

  //   return view('pdf.docencia.CapacitacionDiplomado.VistaCapDiplomado', $data);
  // }

  // public function capDiplomado_edit($capacitacion){
  //   $data = CapacitacionDiplomado::find($capacitacion);

  //   return view('pdf.docencia.CapacitacionDiplomado.EditarCapDiplomado', compact('data')); 
  // }

  // public function capDiplomado_destroy($id){
  //   $data = CapacitacionDocente::find($id);
  //   $data->delete();

  //   return redirect('/capacitacion');
  // }

  // public function pdfFormCapDiplomado($id){
  //   $data = CapacitacionDiplomado::find($id);
  //   $pdf = PDF::loadView('pdf.download.pdf_download_CapacitacionDiplomado', $data);

  //   return $pdf->download('Capacitacion_Diplomado.pdf');
  // }

  // public function pdfCapDiplomado($file){
  //   return response()->download( public_path("storage/{$file}" ));
  // }

  // public function capDiplomado_update(Request $request, $capacitacion){
  //   $cap = CapacitacionDiplomado::find($capacitacion);

  //   if($request->file('file'))
  //   {
  //     $file = $request->file('file');
  //     $name = 'Capacitacion_'.$request->nombre.'_'.$request->tipo.'_'.time().'.'.$file->getClientOriginalExtension();
  //     $request->file->move('../storage/' , $name);
  //     $cap->file = $name;
  //   }

  //   $cap->nombre = $request->nombre;
  //   $cap->tipo = $request->tipo;
  //   $cap->descripcion = $request->descripcion;
  //   $cap->duracion = $request->duracion;
  //   $cap->lugar = $request->lugar;
  //   $cap->contenido = $request->contenido;
  //   $cap->save();

  //   return redirect('/capacitacion');
  // }

  //Gestion Academica
  public function gestion_index(){
    $file = GestionAcademica::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.docencia.GestionAcademica.ListadoGestionAcademica', compact('file'));
  }
  public function pdfGestion($file){
    return response()->download( public_path("storage/{$file}" ));
  }

  public function gestion_create(){
    return view('pdf.docencia.GestionAcademica.CrearGestionAcademica');
  }
  public function pdfFormGestion($id){
    $data = GestionAcademica::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Asesorias', $data);

    return $pdf->download('GestionAcademica.pdf');
  }

  public function gestionAcademica(Request $request){
    request()->validate([
      'nombre' => 'required',
      'gestion' => 'required',
      'cuatrimestre' => 'required',
      'programa' => 'required',
      'grado' => 'required',
      'empresa' => 'required',
      'puntos' => 'required',
      'resultados' => 'required',
      'fechaIni' => 'required',
      'fechaFin' => 'required',
      'alumnos' => 'required',
      'horas' => 'required',
      'estado' => 'required',
      'considerar' => 'required',
      'miembros' => 'required',
      'lgacs' => 'required',
      'file' => 'required',
    ]);


    $ges = new GestionAcademica;

    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Gestion_Academica'.$request->nombre.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $ges->file=$filename;
    }
    $ges->user_id = auth()->id();
    $ges->nombre = $request->nombre;
    $ges->gestion = $request->gestion;
    $ges->cuatrimestre = $request->cuatrimestre;
    $ges->programa = $request->programa;
    $ges->grado = $request->grado;
    $ges->empresa = $request->empresa;
    $ges->puntos = $request->puntos;
    $ges->resultados = $request->resultados;
    $ges->fechaIni = $request->fechaIni;
    $ges->fechaFin = $request->fechaFin;
    $ges->alumnos = $request->alumnos;
    $ges->horas = $request->horas;
    $ges->estado = $request->estado;
    $ges->considerar = $request->considerar;
    $ges->miembros = $request->miembros;
    $ges->lgacs = $request->lgacs;
    $ges->save();

    return redirect('/gestionAcademica');
  }

  public function gestion_show($gestion){
    $data = GestionAcademica::find($gestion);

    return view('pdf.docencia.GestionAcademica.VistaGestionAcademica', $data);
  }

  public function gestion_edit($gestion){
    $data = GestionAcademica::find($gestion);

    return view('pdf.docencia.GestionAcademica.EditarGestionAcademica', compact('data')); 
  }

  public function gestion_update(Request $request, $gestion){
    $ges = GestionAcademica::find($gestion);

    if($request->file('file'))
    {
      $doc = $request->file('file');
      $name = 'Gestion_Academica_'.$request->nombre.'_'.$request->empresa.'_'.$request->estado.'_'.time().'.'.$doc->getClientOriginalExtension();
      $request->file->move('../storage/' , $name);
      $ges->doc = $name;
    }

    $ges->nombre = $request->nombre;
    $ges->gestion = $request->gestion;
    $ges->programa = $request->programa;
    $ges->grado = $request->grado;
    $ges->empresa = $request->empresa;
    $ges->puntos = $request->puntos;
    $ges->resultados = $request->resultados;
    $ges->fechaIni = $request->fechaIni;
    $ges->fechaFin = $request->fechaFin;
    $ges->alumnos = $request->alumnos;
    $ges->horas = $request->horas;
    $ges->estado = $request->estado;
    $ges->considerar = $request->considerar;
    $ges->miembros = $request->miembros;
    $ges->lgacs = $request->lgacs;
    $ges->save();

    return redirect('/gestionAcademica');
  }
  public function gestion_destroy($id){
    $data = GestionAcademica::find($id);
    $data->delete();

    return redirect('/gestionAcademica');
  }
  // Informe Tecnico
  public function informe_show($id){
    $data = InformeTecnico::find($id);

    return view('pdf.academica.InformeTecnico.VistaInformeTecnico', $data);
  }
  public function pdfInforme($file){
    return response()->download( public_path("storage/{$file}" ));
  }

  public function informe_index(){
    $file = InformeTecnico::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.academica.InformeTecnico.ListadoInformeTecnico', compact('file'));
  }

  public function informe_create(){
    return view('pdf.academica.InformeTecnico.CrearInformeTecnico');
  }

  public function informe_edit($id){ 
    $data = InformeTecnico::find($id);

    return view('pdf.academica.InformeTecnico.EditarInformeTecnico', compact('data'));  
  }

  public function informe_update(Request $request, $id){
    $data = InformeTecnico::find($id);
    $data->nombre = $request->nombre;
    $data->alcance = $request->alcance;
    $data->autor = $request->autor;
    $data->año = $request->año;
    $data->institucion = $request->institucion;
    $data->date = $request->date;
    $data->estado = $request->estado;
    $data->paginas = $request->paginas;
    $data->pais = $request->pais;
    $data->proposito = $request->proposito;
    $data->curriculum_de_cuerpo_academico = $request->curriculum_de_cuerpo_academico;
    $data->miembros = $request->miembros;
    $data->lgacs = $request->lgacs;   
    $data->save();

    return redirect('/informe/list');
  }

  public function informe_destroy($id){
    $data = InformeTecnico::find($id);
    $data->delete();

    return redirect('/informe/list');
  }

  //PDF Material PDF
  public function pdfFormInforme($id){
    $data = InformeTecnico::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Informe', $data);

    return $pdf->download('Informe-Tecnico.pdf');
  }

  public function informe_store(Request $request){
    request()->validate([
      'nombre' => 'required',
      'alcance' => 'required',
      'cuatrimestre' => 'required',
      'autor' => 'required',
      'año' => 'required',
      'institucion' => 'required',
      'date' => 'required',
      'estado' => 'required',
      'paginas' => 'required',
      'pais' => 'required',
      'proposito' => 'required',
      'curriculum_de_cuerpo_academico' => 'required',
      'miembros' => 'required',
      'lgacs' => 'required',
      'file' => 'required',
    ]);

    $ges = new InformeTecnico;
    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Informe_Tecnico_'.$request->nombre.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $ges->file=$filename;
    }
    $ges->user_id = auth()->id();
    $ges->nombre = $request->nombre;
    $ges->alcance = $request->alcance;
    $ges->cuatrimestre = $request->cuatrimestre;
    $ges->autor = $request->autor;
    $ges->año = $request->año;
    $ges->institucion = $request->institucion;
    $ges->date = $request->date;
    $ges->estado = $request->estado;
    $ges->paginas = $request->paginas;
    $ges->pais = $request->pais;
    $ges->proposito = $request->proposito;
    $ges->curriculum_de_cuerpo_academico = $request->curriculum_de_cuerpo_academico;
    $ges->miembros = $request->miembros;
    $ges->lgacs = $request->lgacs;
    //$ges->pdf = $name;
    $ges->save();

    return redirect('/informe/list');
  }

  // Libro
  public function libro_show($id){
    $data = Libro::find($id);

    return view('pdf.academica.Libro.VistaLibro', $data);
  }

  public function libro_index(){
    $file = Libro::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.academica.Libro.ListadoLibro', compact('file'));
  }

  public function libro_create(){
    return view('pdf.academica.Libro.CrearLibro');
  }

  public function libro_edit($id){ 
    $data = Libro::find($id);

    return view('pdf.academica.Libro.EditarLibro', compact('data'));  
  }

  public function libro_update(Request $request, $id){
    $data = Libro::find($id);
    $data->estado = $request->estado;
    $data->titulo = $request->titulo;
    $data->autor = $request->autor;
    $data->editorial = $request->editorial;
    $data->edicion = $request->edicion;
    $data->tiraje = $request->tiraje;
    $data->isbn = $request->isbn;
    $data->date = $request->date;
    $data->pais = $request->pais;
    $data->proposito = $request->proposito;
    $data->save();

    return redirect('/libro/list');
  }

  public function libro_destroy($id){
    $data = Libro::find($id);
    $data->delete();

    return redirect('/libro/list');
  }

  //PDF Material PDF
  public function pdfFormLibro($id){
    $data = Libro::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Libro', $data);

    return $pdf->download('Libro.pdf');
  }
  public function pdfLibro($file){
    return response()->download( public_path("storage/{$file}" ));
  }

  public function libro_store(Request $request){
    request()->validate([
      'estado' => 'required',
      'titulo' => 'required',
      'cuatrimestre' => 'required',
      'autor' => 'required',
      'editorial' => 'required',
      'edicion' => 'required',
      'tiraje' => 'required',
      'isbn' => 'required',
      'date' => 'required',
      'pais' => 'required',
      'proposito' => 'required',
      'file' => 'required',
    ]);
    
    $ges = new Libro;
    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Libro_'.$request->titulo.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $ges->file=$filename;
    }
    $ges->user_id = auth()->id();
    $ges->estado = $request->estado;
    $ges->titulo = $request->titulo;
    $ges->cuatrimestre = $request->cuatrimestre;
    $ges->autor = $request->autor;
    $ges->editorial = $request->editorial;
    $ges->edicion = $request->edicion;
    $ges->tiraje = $request->tiraje;
    $ges->isbn = $request->isbn;
    $ges->date = $request->date;
    $ges->pais = $request->pais;
    $ges->proposito = $request->proposito;
    $ges->save();

    return redirect('/libro/list');
  }

  // Material
  public function material_show($id){
    $data = Material::find($id);

    return view('pdf.academica.Material.VistaMaterial', $data);
  }

  public function material_index(){
    $file = Material::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.academica.Material.ListadoMaterial', compact('file'));
  }

  public function material_create(){
    return view('pdf.academica.Material.CrearMaterial');
  }

  public function material_edit($id){ 
    $data = Material::find($id);

    return view('pdf.academica.Material.EditarMaterial', compact('data'));
  }

  public function material_update(Request $request, $id){
    $data = Material::find($id);
    $data->descripcion = $request->descripcion;
    $data->titulo = $request->titulo;
    $data->autor = $request->autor;
    $data->editorial = $request->editorial;
    $data->date = $request->date;
    $data->pais = $request->pais;
    $data->proposito = $request->proposito;
    $data->considerar = $request->considerar;
    $data->miembros = $request->miembros;
    $data->lgacs = $request->lgacs;
    $data->save();

    return redirect('/material/list');
  }

  public function material_destroy($id){
    $data = Material::find($id);
    $data->delete();

    return redirect('/material/list');
  }

  //PDF Material PDF
  public function pdfFormMaterial($id){
    $data = Material::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Material', $data);

    return $pdf->download('Material_Didactico.pdf');
  }

  public function material_store(Request $request){
    request()->validate([
      'descripcion' => 'required',
      'titulo' => 'required',
      'autor' => 'required',
      'editorial' => 'required',
      'date' => 'required',
      'pais' => 'required',
      'proposito' => 'required',
      'considerar' => 'required',
      'miembros' => 'required',
      'cuatrimestre' => 'required',
      'lgacs' => 'required',
      'file' => 'required',
    ]);

    $ges = new Material;
    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Material_Didactico_'.$request->nombre.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $ges->file=$filename;
    }
    $ges->user_id = auth()->id();
    $ges->descripcion = $request->descripcion;
    $ges->titulo = $request->titulo;
    $ges->autor = $request->autor;
    $ges->editorial = $request->editorial;
    $ges->date = $request->date;
    $ges->pais = $request->pais;
    $ges->proposito = $request->proposito;
    $ges->considerar = $request->considerar;
    $ges->miembros = $request->miembros;
    $ges->cuatrimestre = $request->cuatrimestre;
    $ges->lgacs = $request->lgacs;

    $ges->save();

    return redirect('/material/list');
  }
  public function pdfMaterial($file){
    return response()->download( public_path("storage/{$file}" ));
  }
  // Proyecto
  public function proyecto_show($id){
    $data = Proyecto::find($id);

    return view('pdf.academica.Proyecto.VistaProyecto', $data);
  }

  public function proyecto_index(){
    $file = Proyecto::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.academica.Proyecto.ListadoProyecto', compact('file'));
  }

  public function proyecto_create(){
    return view('pdf.academica.Proyecto.CrearProyecto');
  }

  public function proyecto_edit($id){ 
    $data = Proyecto::find($id);

    return view('pdf.academica.Proyecto.EditarProyecto', compact('data'));  
  }

  public function proyecto_update(Request $request, $id){
    $data = Proyecto::find($id);
    $data->nombre = $request->nombre;
    $data->titulo = $request->titulo;
    $data->tipo = $request->tipo;
    $data->curriculum_de_cuerpo_academico = $request->curriculum_de_cuerpo_academico;
    $data->investigadores = $request->investigadores;
    $data->alumnos = $request->alumnos;
    $data->actividades = $request->actividades;
    $data->fecha = $request->fecha;
    $data->fecha_termino = $request->fecha_termino;
    $data->miembros = $request->miembros;
    $data->lgacs = $request->lgacs;
    //$ges->pdf = $name;
    $data->save();

    return redirect('/proyecto/list');
  }

  public function proyecto_destroy($id){
    $data = Proyecto::find($id);
    $data->delete();

    return redirect('/proyecto/list');
  }

  public function proyecto_store(Request $request){
    request()->validate([
      'nombre' => 'required',
      'titulo' => 'required',
      'tipo' => 'required',
      'cuatrimestre' => 'required',
      'curriculum_de_cuerpo_academico' => 'required',
      'investigadores' => 'required',
      'alumnos' => 'required',
      'actividades' => 'required',
      'fecha' => 'required',
      'fecha_termino' => 'required',
      'miembros' => 'required',
      'lgacs' => 'required',
      'file' => 'required',
    ]);
 
    $ges = new Proyecto;
    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Proyecto_'.$request->nombre.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $ges->file=$filename;
    }
    $ges->user_id = auth()->id();
    $ges->nombre = $request->nombre;
    $ges->titulo = $request->titulo;
    $ges->tipo = $request->tipo;
    $ges->cuatrimestre = $request->cuatrimestre;
    $ges->curriculum_de_cuerpo_academico = $request->curriculum_de_cuerpo_academico;
    $ges->investigadores = $request->investigadores;
    $ges->alumnos = $request->alumnos;
    $ges->actividades = $request->actividades;
    $ges->fecha = $request->fecha;
    $ges->fecha_termino = $request->fecha_termino;
    $ges->miembros = $request->miembros;
    $ges->lgacs = $request->lgacs;
    //$ges->pdf = $name;
    $ges->save();

    return redirect('/proyecto/list');
  }

  //PDF Proyecto PDF
  public function pdfFormProyecto($id){
    $data = Proyecto::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Proyecto', $data);

    return $pdf->download('Proyecto_De_Investigacion.pdf');
  }
  public function pdfProyecto($file){
    return response()->download( public_path("storage/{$file}" ));
  }
  //Tutoria Grupal
  public function tutoriaGrupal(Request $request){
    request()->validate([
      'estudiantes' => 'required',
      'nivel' => 'required',
      'cuatrimestre' => 'required',
      'programa' => 'required',
      'fechaIni' => 'required',
      'fechaFin' => 'required',
      'tipo' => 'required',
      'estado' => 'required',
      'file' => 'required',
    ]);

 

    $tutG = new TutoriaGrupal;
    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Tutoria_Grupal_'.$request->programa.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $tutG->file=$filename;
    }
    $tutG->user_id = auth()->id();
    $tutG->estudiantes = $request->estudiantes;
    $tutG->nivel = $request->nivel;
    $tutG->programa = $request->programa;
    $tutG->fechaIni = $request->fechaIni;
    $tutG->fechaFin = $request->fechaFin;
    $tutG->tipo = $request->tipo;
    $tutG->estado = $request->estado;
    $tutG->cuatrimestre = $request->cuatrimestre;
    $tutG->save();

    return redirect('/tutoriaG');
  }
  public function TutoriaG_destroy($id){
    $data = TutoriaGrupal::find($id);
    $data->delete();

    return redirect('/tutoriaG');
  }
  public function tutoriaG_index(){
    $file = TutoriaGrupal::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.docencia.TutoriaGrupal.ListadoTutoriaGrupal', compact('file'));
  }
  public function pdfTutoriaG($file){
    return response()->download( public_path("storage/{$file}" ));
  }

  public function pdfFormTutoriaG($id){
    $data = TutoriaGrupal::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Tutoria_Grupal', $data);

    return $pdf->download('Tutoria_Grupal.pdf');
  }

  public function tutoriaG_create(){
    return view('pdf.docencia.TutoriaGrupal.CrearTutoriaGrupal');
  }

  public function tutoriaG_show($tutoriaG){
    $data = TutoriaGrupal::find($tutoriaG);

    return view('pdf.docencia.TutoriaGrupal.VistaTutoriaGrupal', $data);
  }

  public function tutoriaG_edit($tutoria){
    $data = TutoriaGrupal::find($tutoria);

    return view('pdf.docencia.TutoriaGrupal.EditarTutoriaGrupal', compact('data')); 
  }

  public function tutoriaG_update(Request $request, $tutoria){
    $tutG = TutoriaGrupal::find($tutoria);

    $tutG->estudiantes = $request->estudiantes;
    $tutG->nivel = $request->nivel;
    $tutG->programa = $request->programa;
    $tutG->fechaIni = $request->fechaIni;
    $tutG->fechaFin = $request->fechaFin;
    $tutG->tipo = $request->tipo;
    $tutG->estado = $request->estado;
    $tutG->save();

    return redirect('/tutoriaG');
  }

  //Tutoria Individual
  public function tutoriaIndividual(Request $request){
    request()->validate([
      'nivel' => 'required',
      'cuatrimestre' => 'required',
      'programa' => 'required',
      'fechaIni' => 'required',
      'fechaFin' => 'required',
      'tipo' => 'required',
      'estado' => 'required',
      'file' => 'required',
    ]);

   
    $tut = new TutoriaIndividual;
    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Tutoria_Individual_'.$request->programa.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $tut->file=$filename;
    }
    $tut->user_id = auth()->id();
    $tut->nivel = $request->nivel;
    $tut->programa = $request->programa;
    $tut->fechaIni = $request->fechaIni;
    $tut->fechaFin = $request->fechaFin;
    $tut->tipo = $request->tipo;
    $tut->estado = $request->estado;
    $tut->cuatrimestre = $request->cuatrimestre;
    $tut->save();

    return redirect('/tutoria');
  }
  public function Tutoria_destroy($id){
    $data = TutoriaIndividual::find($id);
    $data->delete();

    return redirect('/tutoria');
  }
  public function tutoria_index(){
    $file = TutoriaIndividual::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.docencia.Tutoria.ListadoTutoria', compact('file'));
  }
  public function pdfTutoria($file){
    return response()->download( public_path("storage/{$file}" ));
  }

  public function pdfFormTutoria($id){
    $data = TutoriaIndividual::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Tutoria', $data);

    return $pdf->download('Tutoria_Individual.pdf');
  }
  public function tutoria_create(){
    return view('pdf.docencia.Tutoria.CrearTutoria');
  }

  public function tutoria_show($tutoria){
    $data = TutoriaIndividual::find($tutoria);

    return view('pdf.docencia.Tutoria.VistaTutoria', $data);
  }

  public function tutoria_edit($tutoria){
    $data = TutoriaIndividual::find($tutoria);

    return view('pdf.docencia.Tutoria.EditarTutoria', compact('data')); 
  }

  public function tutoria_update(Request $request, $tutoria){
    $tut = TutoriaIndividual::find($tutoria);

    if($request->file('file'))
    {
      $doc = $request->file('file');
      $name = 'Gestion_Academica_'.$request->nombre.'_'.$request->empresa.'_'.$request->estado.'_'.time().'.'.$doc->getClientOriginalExtension();
      $request->file->move('../storage/' , $name);
      $tut->doc = $name;
    }

    $tut->nivel = $request->nivel;
    $tut->programa = $request->programa;
    $tut->fechaIni = $request->fechaIni;
    $tut->fechaFin = $request->fechaFin;
    $tut->tipo = $request->tipo;
    $tut->estado = $request->estado;
    $tut->save();

    return redirect('/tutoria');
  }

  //Estadias
  public function estadiaEmpresas(Request $request){
    request()->validate([
      'nombre' => 'required',
      'grado' => 'required',
      'programa' => 'required',
      'cuatrimestre' => 'required',
      'empresa' => 'required',
      'puntos' => 'required',
      'resultados' => 'required',
      'fechaIni' => 'required',
      'fechaFin' => 'required',
      'alumnos' => 'required',
      'horas' => 'required',
      'estado' => 'required',
      'considerar' => 'required',
      'miembros' => 'required',
      'lgacs' => 'required',
      'file' => 'required',
    ]);


    $est = new EstadiaEmpresa;
    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Estadia_'.$request->nombre.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $est->file=$filename;
    }
    $est->user_id = auth()->id();
    $est->nombre = $request->nombre;
    $est->grado = $request->grado;
    $est->programa = $request->programa;
    $est->empresa = $request->empresa;
    $est->puntos = $request->puntos;
    $est->resultados = $request->resultados;
    $est->fechaIni = $request->fechaIni;
    $est->fechaFin = $request->fechaFin;
    $est->alumnos = $request->alumnos;
    $est->horas = $request->horas;
    $est->estado = $request->estado;
    $est->considerar = $request->considerar;
    $est->miembros = $request->miembros;
    $est->lgacs = $request->lgacs;
    $est->cuatrimestre = $request->cuatrimestre;
    $est->save();

    return redirect('/estadia');
  }
  public function estadia_destroy($id){
    $data = EstadiaEmpresa::find($id);
    $data->delete();

    return redirect('/estadia');
  }
  public function estadia_index(){
    $file = EstadiaEmpresa::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.docencia.Estadia.ListadoEstadia', compact('file'));
  }
  public function pdfEstadia($file){
    return response()->download( public_path("storage/{$file}" ));
  }

  public function pdfFormEstadia($id){
    $data = EstadiaEmpresa::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Estadia', $data);

    return $pdf->download('Estadia.pdf');
  }
  public function estadia_create(){
    return view('pdf.docencia.Estadia.CrearEstadia');
  }

  public function estadia_show($tutoria){
    $data = EstadiaEmpresa::find($tutoria);

    return view('pdf.docencia.Estadia.VistaEstadia', $data);
  }

  public function estadia_edit($tutoria){
    $data = EstadiaEmpresa::find($tutoria);

    return view('pdf.docencia.Estadia.EditarEstadia', compact('data')); 
  }

  public function estadia_update(Request $request, $estadia){
    $est = EstadiaEmpresa::find($estadia);

    if($request->file('file'))
    {
      $doc = $request->file('file');
      $name = 'Gestion_Academica_'.$request->nombre.''.$request->empresa.''.$request->estado.'_'.time().'.'.$doc->getClientOriginalExtension();
      $request->file->move('../storage/' , $name);
      $est->doc = $name;
    }

    $est->nombre = $request->nombre;
    $est->grado = $request->grado;
    $est->programa = $request->programa;
    $est->empresa = $request->empresa;
    $est->puntos = $request->puntos;
    $est->resultados = $request->resultados;
    $est->fechaIni = $request->fechaIni;
    $est->fechaFin = $request->fechaFin;
    $est->alumnos = $request->alumnos;
    $est->horas = $request->horas;
    $est->estado = $request->estado;
    $est->considerar = $request->considerar;
    $est->miembros = $request->miembros;
    $est->lgacs = $request->lgacs;
    $est->save();

    return redirect('/estadia');
  }

  //Curso
  public function curso(Request $request){
    request()->validate([
      'nombre' => 'required',
      'institucion' => 'required',
      'programa' => 'required',
      'cuatrimestre' => 'required',
      'grupo' => 'required',
      'nivel' => 'required',
      'fechaIni' => 'required',
      'alumnos' => 'required',
      'duracion' => 'required',
      'hMes' => 'required',
      'hSemana' => 'required',
      'file' => 'required',
      'periodo' => 'required',
    ]);


    $doc = new Docencia;
    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Docencia_'.$request->programa.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $doc->file=$filename;
    }
    $doc->user_id = auth()->id();
    $doc->nombre = $request->nombre;
    $doc->institucion = $request->institucion;
    $doc->programa = $request->programa;
    $doc->cuatrimestre = $request->cuatrimestre;
    $doc->grupo = $request->grupo;
    $doc->nivel = $request->nivel;
    $doc->fechaIni = $request->fechaIni;
    $doc->alumnos = $request->alumnos;
    $doc->duracion = $request->duracion;
    $doc->hMes = $request->hMes;
    $doc->hSemana = $request->hSemana;
    $doc->periodo = $request->periodo;
    $doc->save();

    return redirect('/curso');
  }
  public function pdfCurso($file){
    return response()->download( public_path("storage/{$file}" ));
  }

  public function pdfFormCurso($id){
    $data = Docencia::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Curso', $data);

    return $pdf->download('Curso.pdf');
  }
  public function curso_index(){
    $file = Docencia::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.docencia.Curso.ListadoCurso', compact('file'));
  }
  public function curso_destroy($id){
    $data = Docencia::find($id);
    $data->delete();

    return redirect('/curso');
  }

  public function curso_create(){
    return view('pdf.docencia.Curso.CrearCurso');
  }

  public function curso_show($curso){
    $data = Docencia::find($curso);

    return view('pdf.docencia.Curso.VistaCurso', $data);
  }

  public function curso_edit($curso){
    $data = Docencia::find($curso);

    return view('pdf.docencia.Curso.EditarCurso', compact('data')); 
  }

  public function curso_update(Request $request, $curso){
    $doc = Docencia::find($curso);

    if($request->file('file'))
    {
      $doc = $request->file('file');
      $name = 'Gestion_Academica_'.$request->nombre.''.$request->empresa.''.$request->estado.'_'.time().'.'.$doc->getClientOriginalExtension();
      $request->file->move('../storage/' , $name);
      $est->doc = $name;
    }

    $doc->nombre = $request->nombre;
    $doc->institucion = $request->institucion;
    $doc->programa = $request->programa;
    $doc->cuatrimestre = $request->cuatrimestre;
    $doc->grupo = $request->grupo;
    $doc->nivel = $request->nivel;
    $doc->fechaIni = $request->fechaIni;
    $doc->alumnos = $request->alumnos;
    $doc->duracion = $request->duracion;
    $doc->hMes = $request->hMes;
    $doc->hSemana = $request->hSemana;
    $doc->save();

    return redirect('/curso');
  }

  //Direccion
  public function direccion(Request $request){
    request()->validate([
      'titulo' => 'required',
      'fechaIni' => 'required',
      'cuatrimestre' => 'required',
      'grado' => 'required',
      'fechaFin' => 'required',
      'alumnos' => 'required',
      'estado' => 'required',
      'considerar' => 'required',
      'miembros' => 'required',
      'lgacs' => 'required',
      'file' => 'required',
    ]);

    $dir = new Direccion;
    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Direccion_'.$request->nombre.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $dir->file=$filename;
    }

    $dir->user_id = auth()->id();
    $dir->titulo = $request->titulo;
    $dir->fechaIni = $request->fechaIni;
    $dir->grado = $request->grado;
    $dir->fechaFin = $request->fechaFin;
    $dir->alumnos = $request->alumnos;
    $dir->estado = $request->estado;
    $dir->cv = $request->considerar;
    $dir->miembros = $request->miembros;
    $dir->lgacs = $request->lgacs;
    $dir->cuatrimestre = $request->cuatrimestre;
    $dir->save();

    return redirect('/direccion');
  }
  public function direccion_destroy($id){
    $data = Direccion::find($id);
    $data->delete();

    return redirect('/direccion');
  }
  public function pdfDireccion($file){
    return response()->download( public_path("storage/{$file}" ));
  }

  public function pdfFormDireccion($id){
    $data = Direccion::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Direccion_Individualizada', $data);

    return $pdf->download('Docencia.pdf');
  }
  public function direccion_index(){
    $file = Direccion::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.docencia.Direccion.ListadoDireccion', compact('file'));
  }

  public function direccion_create(){
    return view('pdf.docencia.Direccion.CrearDireccion');
  }

  public function direccion_show($direccion){
    $data = Direccion::find($direccion);

    return view('pdf.docencia.Direccion.VistaDireccion', $data);
  }

  public function direccion_edit($direccion){
    $data = Direccion::find($direccion);

    return view('pdf.docencia.Direccion.EditarDireccion', compact('data')); 
  }

  public function direccion_update(Request $request, $direccion){
    $dir = Direccion::find($direccion);

    if($request->file('file'))
    {
      $doc = $request->file('file');
      $name = 'Gestion_Academica_'.$request->nombre.''.$request->empresa.''.$request->estado.'_'.time().'.'.$doc->getClientOriginalExtension();
      $request->file->move('../storage/' , $name);
      $est->doc = $name;
    }

    $dir->titulo = $request->titulo;
    $dir->fechaIni = $request->fechaIni;
    $dir->grado = $request->grado;
    $dir->fechaFin = $request->fechaFin;
    $dir->alumnos = $request->alumnos;
    $dir->estado = $request->estado;
    $dir->cv = $request->considerar;
    $dir->miembros = $request->miembros;
    $dir->lgacs = $request->lgacs;
    $dir->save();

    return redirect('/direccion');
  }



  //Cuerpo Academico
  public function cuerpoAcademico(Request $request){
    request()->validate([
      'nombre' => 'required',
      'clave' => 'required',
      'grado' => 'required',
      'lineas' => 'required',
      'file' => 'required',
      'cuatrimestre' => 'required',
    ]);

    $cuer = new CuerpoAcademico;
    if($request->file('file'))
    {
      $file=$request->file('file');
      $filename='Cuerpo_Academico'.$request->nombre.'.'.$file->getClientOriginalExtension();
      $request->file->move('storage/' , $filename);

      $cuer->file=$filename;
    }
    $cuer->user_id = auth()->id();
    $cuer->cuatrimestre = $request->cuatrimestre;
    $cuer->nombre = $request->nombre;
    $cuer->clave = $request->clave;
    $cuer->grado = $request->grado;
    $cuer->lineas = $request->lineas;
  
    $cuer->save();

    return redirect('/cuerpoAcademico');
  }

  public function cuerpoAcademico_index(){
    $file = CuerpoAcademico::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();

    return view('pdf.docencia.CuerpoAcademico.ListadoCuerpoAcademico', compact('file'));
  }
  public function pdfFormcuerpoAcademico($id){
    $data = CuerpoAcademico::find($id);
    $pdf = PDF::loadView('pdf.download.pdf_download_Cuerpo_Academico', $data);

    return $pdf->download('Cuerpo Academico.pdf');
  }

  public function pdfcuerpoAcademico($file){
    return response()->download( public_path("storage/{$file}" ));
  }
  
  public function cuerpoAcademico_create(){
    return view('pdf.docencia.CuerpoAcademico.CrearCuerpoAcademico');
  }

  public function cuerpoAcademico_show($cuerpo){
    $data = CuerpoAcademico::find($cuerpo);

    return view('pdf.docencia.CuerpoAcademico.VistaCuerpoAcademico', $data);
  }

  public function cuerpoAcademico_edit($cuerpo){
    $data = CuerpoAcademico::find($cuerpo);

    return view('pdf.docencia.CuerpoAcademico.EditarCuerpoAcademico', compact('data')); 
  }

  public function cuerpoAcademico_update(Request $request, $cuerpo){
    $cuer = CuerpoAcademico::find($cuerpo);

    if($request->file('file'))
    {
      $doc = $request->file('file');
      $name = 'Gestion_Academica_'.$request->nombre.'_'.$request->clave.'_'.$request->grado.'_'.time().'.'.$doc->getClientOriginalExtension();
      $request->file->move('../storage/' , $name);
      $cuer->doc = $name;
    }

    $cuer->nombre = $request->nombre;
    $cuer->clave = $request->clave;
    $cuer->grado = $request->grado;
    $cuer->lineas = $request->lineas;
    $cuer->save();

    return redirect('/cuerpoAcademico');
  }

  public function cuerpoAcademico_destroy($id){
    $data = CuerpoAcademico::find($id);
    $data->delete();

    return redirect('/cuerpoAcademico');
  }
}