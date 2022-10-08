<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
});
//Administrador
 Route::group(['middleware' => ['role:Administrador']], function () {
    Route::get('/Administrador', function () {
     return view('Administrador.Dashboard');
     
 });
 
 Route::resource('Administrador','AdminController');
 });

Route::get('/AdminInforme', function () {
    return view('Administrador.Informe');
});

Route::get('/AdminUsuarios','AdminController@usuarios');

Route::get('/AdminDocumentos','AdminController@documentos');


Route::get('/home', function () {
    return view('home');
});

Route::get('/capturaExp', function () {
    return view('expedientes.create');
});

Route::get('/header', function () {
    return view('layouts.header');
});

Route::get('/perfil', function () {
    return view('users.perfil');
});
Route::get('/tutoria', function () {
    return view('pdf.docencia.tutoria');
});

Route::get('/capacitacion', function () {
    return view('users.capacitacion');
});


// Route::group(['middleware' => ['role:PTC']], function () {
//     Route::get('/Articulo', function () {
//     return view('pdf.academica.articulo');
// });
// });

Route::get('/Articulo-Revista', function () {
    return view('pdf.academica.Articulo_revista');
});
Route::get('/Articulo-Arbitrado', function () {
    return view('pdf.academica.Articulo_Arbitrado');
});


Route::get('/Libro', function () {
    return view('pdf.academica.libro');
});

Route::get('/Informe_tec', function () {
    return view('pdf.academica.informe_tec');
});

Route::get('/Proyecto', function () {
    return view('pdf.academica.proyecto');
});

Route::get('/informes', function () {
    return view('supervisor.informe');
});

Route::get('/consultaInfo', function () {
    return view('supervisor.consulta');
});
Route::group(['middleware' => ['role:Supervisor']], function () {
Route::get('/supervisorDash', function () {
    return view('supervisor.dashboard');

});
Route::get('/supervisorDash','DocumentosController@Supervisor_index')->name('Supervisor.index');
});

Route::get('/asesoria_supervisor/list','DocumentosController@asesoria_supervisor_index');
Route::get('/material_supervisor/list','DocumentosController@material_supervisor_index');
Route::get('/proyecto_supervisor/list','DocumentosController@proyecto_supervisor_index');
Route::get('/difusion_supervisor/list','DocumentosController@difusion_supervisor_index');
Route::get('/revista_supervisor/list','DocumentosController@revista_supervisor_index');
Route::get('/arbitrado_supervisor/list','DocumentosController@arbitrado_supervisor_index');
Route::get('/libro_supervisor/list','DocumentosController@libro_supervisor_index');
Route::get('/tecnico_supervisor/list','DocumentosController@informeTecnico_supervisor_index');
Route::get('/gestion_supervisor/list','DocumentosController@gestionAcademica_supervisor_index');

Route::get('/capacitacion_supervisor/list','DocumentosController@capacitacion_supervisor_index');
// Route::get('/capDiplomado_supervisor/list','DocumentosController@capDiplomado_supervisor_index');
Route::get('/cuerpoAcademico_supervisor/list','DocumentosController@cuerpoAcademico_supervisor_index');
Route::get('/curso_supervisor/list','DocumentosController@curso_supervisor_index');
Route::get('/direccion_supervisor/list','DocumentosController@direccion_supervisor_index');
Route::get('/estadia_supervisor/list','DocumentosController@estadia_supervisor_index');
Route::get('/gestionAcademica_supervisor/list','DocumentosController@gestionAcademica_supervisor_index');
Route::get('/tutoria_supervisor/list','DocumentosController@tutoria_supervisor_index');
Route::get('/tutoriaGrupal_supervisor/list','DocumentosController@tutoriaGrupal_supervisor_index');

//PDF capturaExp
Route::get('/capturaExp', 'PdfController@pdfForm');
Route::post('pdf_download', 'PdfController@pdfDownload');

//PDF Articulo

Route::group(['middleware' => ['role:PTC']], function () {
    Route::get('/articulo', 'PdfController@pdfFormArticulo');
});
Route::post('pdf_download_Articulo', 'PdfController@pdfDownload_Articulo');

//PDF Proyecto
Route::get('/proyecto', 'PdfController@pdfFormProyecto');
Route::post('pdf_download_Proyecto', 'PdfController@pdfDownload_Proyectos');

//PDF Revista
Route::get('/Articulo_revista', 'PdfController@pdfFormRevista');
Route::post('pdf_download_Revista', 'PdfController@pdfDownload_Revista');

//PDF Arbitrado
Route::get('/Articulo_Arbitrado', 'PdfController@pdfFormArbitrado');
Route::post('pdf_download_Arbitrado', 'PdfController@pdfDownload_Arbitrado');

//PDF Libro
Route::get('/libro', 'PdfController@pdfFormLibro');
Route::post('pdf_download_Libro', 'PdfController@pdfDownload_Libro');

//PDF Informe
Route::get('/informe_tec', 'PdfController@pdfFormInforme');
Route::post('pdf_download_Informe', 'PdfController@pdfDownload_Informe');

Route::post('pdf_download_Curso', 'PdfController@pdfDownload_Curso');

Route::post('pdf_download_Tutoria', 'PdfController@pdfDownload_Tutoria');

Route::post('pdf_download_Grupal', 'PdfController@pdfDownload_Tutoria_Grupal');

Route::post('pdf_download_Direccion_Individualizada', 'PdfController@pdfDownload_Direccion_Individualizada');

Route::post('pdf_download_Estadia_Empresa', 'PdfController@pdfDownload_Estadia');

Route::post('pdf_download_Cuerpo_Academico', 'PdfController@pdfDownload_CuerpoAcademico');

//Home
Route::get('/home','HomeController@index');

//Documentos
Route::get('/files/create','DocumentosController@create');
Route::post('/files','DocumentosController@store');

Route::get('/files','DocumentosController@index');
Route::get('/files/{id}','DocumentosController@show');
Route::get('file/download/{file}','DocumentosController@download');


//Busqueda
Route::get('/search','DocumentosController@search');
Route::get('/Adminsearch','AdminController@Adminsearch');
Route::get('/fechas','DocumentosController@fechas');
Route::get('/fechaActual','DocumentosController@fechaActual');
Route::get('/division','AdminController@PorDivision');
Route::get('/nombre','AdminController@PorNombre');
Route::get('/fechasAdmin','AdminController@fechas');
Route::get('/fechaActualAdmin','AdminController@fechaActual');

//Filtro Asesoria
Route::get('/filtro','DocumentosController@busqueda');

//Filtro Busqueda Material
Route::get('/filtroMaterial','DocumentosController@busquedaMaterial');
//Filtro Busqueda Proyecto
Route::get('/filtroProyecto','DocumentosController@busquedaProyecto');
//Filtro Busqueda Revista
Route::get('/filtroRevista','DocumentosController@busquedaRevista');
//Filtro Busqueda Arbitrado
Route::get('/filtroArbitrado','DocumentosController@busquedaArbitrado');
//Filtro Busqueda Libro
Route::get('/filtroLibro','DocumentosController@busquedaLibro');
//Filtro Busqueda InformeTecnico
Route::get('/filtroInformeTecnico','DocumentosController@busquedaInformeTecnico');
//Filtro Busqueda Articulo Difusion
Route::get('/filtroDifusion','DocumentosController@busquedaDifusion');
//Filtro Busqueda Gestion Academica
Route::get('/filtroGestion','DocumentosController@busquedaGestion');
//Filtro Busqueda Tutoria Grupal
Route::get('/filtroGrupal','DocumentosController@busquedaTutoriaG');
//Filtro Busqueda Tutoria Individual
Route::get('/filtroTutoria','DocumentosController@busquedaTutoria');
//Filtro Busqueda Curso
Route::get('/filtroCurso','DocumentosController@busquedaCurso');
//Filtro Busqueda Direccion
Route::get('/filtroDireccion','DocumentosController@busquedaDireccion');
//Filtro Busqueda Estadia
Route::get('/filtroEstadia','DocumentosController@busquedaEstadia');
//Filtro Busqueda Cuerpo Academico
Route::get('/filtroAcademico','DocumentosController@busquedaCuerpo');
//Filtro Busqueda Capacitacion
Route::get('/filtroCapacitacion','DocumentosController@busquedaCapacitacion');
//Resources
Route::resource('archivos','DocumentosController');
Route::resource('usuario','UserController');


//pdfController - Material

Route::post('pdf_download_Material', 'PdfController@pdfDownload_Material');
Route::get('/material/list','PdfController@material_index');
Route::get('/material','PdfController@material_create')->name('material.create');
Route::get('/material/{id}','PdfController@material_show');
Route::post('/material','PdfController@material_store')->name('material.store');
Route::delete('/material/{id}','PdfController@material_destroy')->name('material.destroy');
Route::get('/material/{id}/edit','PdfController@material_edit');
Route::put('/material/{id}','PdfController@material_update')->name('material.update');

Route::get('/material/download/{id}','PdfController@pdfFormMaterial');
Route::get('/material/download/pdf/{file}','PdfController@pdfMaterial');

//pdfController - Asesorias

Route::get('/asesoria/list','PdfController@asesoria_index');
Route::get('/asesoria','PdfController@asesoria_create')->name('asesoria.create');
Route::get('/asesoria/{id}','PdfController@asesoria_show');
Route::post('/asesoria','PdfController@asesoria_store')->name('asesoria.store');


Route::delete('/asesoria/{id}','PdfController@asesoria_destroy')->name('asesoria.destroy');
Route::get('/asesoria/{id}/edit','PdfController@asesoria_edit');
Route::put('/asesoria/{id}','PdfController@asesoria_update')->name('asesoria.update');

Route::get('/asesoria/download/{id}','PdfController@pdfFormAsesoria');
Route::get('/asesoria/download/pdf/{file}','PdfController@pdfAsesoria');



//Seleccion Informe
Route::get('/asesoria/select/{id}','PdfController@InformeAsesoria')->name('asesoria.select');
Route::get('/material/select/{id}','PdfController@InformeMaterial')->name('material.select');
Route::get('/proyecto/select/{id}','PdfController@InformeProyecto')->name('proyecto.select');
Route::get('/difusion/select/{id}','PdfController@InformeDifusion')->name('difusion.select');
Route::get('/revista/select/{id}','PdfController@InformeRevista')->name('revista.select');
Route::get('/arbitrado/select/{id}','PdfController@InformeArbitrado')->name('arbitrado.select');
Route::get('/libro/select/{id}','PdfController@InformeLibro')->name('libro.select');
Route::get('/tecnico/select/{id}','PdfController@InformeTecnico')->name('tecnico.select');
Route::get('/gestion/select/{id}','PdfController@InformeGestion')->name('gestion.select');
Route::get('/grupal/select/{id}','PdfController@InformeGrupal')->name('grupal.select');
Route::get('/tutoria/select/{id}','PdfController@InformeTutoria')->name('tutoria.select');
Route::get('/curso/select/{id}','PdfController@InformeCurso')->name('curso.select');
Route::get('/direccion/select/{id}','PdfController@InformeDireccion')->name('direccion.select');
Route::get('/estadia/select/{id}','PdfController@InformeEstadia')->name('estadia.select');
Route::get('/cuerpo/select/{id}','PdfController@InformeCuerpo')->name('cuerpo.select');
Route::get('/capacitacion/select/{id}','PdfController@InformeCapacitacion')->name('capacitacion.select');
// Route::get('/capDiplomado/select/{id}','PdfController@InformeCapDiplomado')->name('capDiplomado.select');

//pdfController - Proyecto de Investigacion

Route::get('/proyecto/list','PdfController@proyecto_index');
Route::get('/proyecto','PdfController@proyecto_create')->name('proyecto.create');
Route::get('/proyecto/{id}','PdfController@proyecto_show');
Route::post('/proyecto','PdfController@proyecto_store')->name('proyecto.store');
Route::delete('/proyecto/{id}','PdfController@proyecto_destroy')->name('proyecto.destroy');
Route::get('/proyecto/{id}/edit','PdfController@proyecto_edit');
Route::put('/proyecto/{id}','PdfController@proyecto_update')->name('proyecto.update');

Route::get('/proyecto/download/{id}','PdfController@pdfFormProyecto');
Route::get('/proyecto/download/pdf/{file}','PdfController@pdfProyecto');

//pdfController - Articulo de Revista

Route::get('/revista/list','PdfController@revista_index');
Route::get('/revista','PdfController@revista_create')->name('revista.create');
Route::get('/revista/{id}','PdfController@revista_show');
Route::post('/revista','PdfController@revista_store')->name('revista.store');
Route::delete('/revista/{id}','PdfController@revista_destroy')->name('revista.destroy');
Route::get('/revista/{id}/edit','PdfController@revista_edit');
Route::put('/revista/{id}','PdfController@revista_update')->name('revista.update');

Route::get('/revista/download/{id}','PdfController@pdfFormRevista');
Route::get('/revista/download/pdf/{file}','PdfController@pdfRevista');

//pdfController - Articulo de Arbitrado

Route::get('/arbitrado/list','PdfController@arbitrado_index');
Route::get('/arbitrado','PdfController@arbitrado_create')->name('arbitrado.create');
Route::get('/arbitrado/{id}','PdfController@arbitrado_show');
Route::post('/arbitrado','PdfController@arbitrado_store')->name('arbitrado.store');
Route::delete('/arbitrado/{id}','PdfController@arbitrado_destroy')->name('arbitrado.destroy');
Route::get('/arbitrado/{id}/edit','PdfController@arbitrado_edit');
Route::put('/arbitrado/{id}','PdfController@arbitrado_update')->name('arbitrado.update');

Route::get('/arbitrado/download/{id}','PdfController@pdfFormArbitrado');
Route::get('/arbitrado/download/pdf/{file}','PdfController@pdfArbitrado');

//pdfController - Articulo de Difusion

Route::get('/difusion/list','PdfController@difusion_index');
Route::get('/difusion','PdfController@difusion_create')->name('difusion.create');
Route::get('/difusion/{id}','PdfController@difusion_show');
Route::post('/difusion','PdfController@difusion_store')->name('difusion.store');
Route::delete('/difusion/{id}','PdfController@difusion_destroy')->name('difusion.destroy');
Route::get('/difusion/{id}/edit','PdfController@difusion_edit');
Route::put('/difusion/{id}','PdfController@difusion_update')->name('difusion.update');

Route::get('/difusion/download/{id}','PdfController@pdfFormDifusion');
Route::get('/difusion/download/pdf/{file}','PdfController@pdfDifusion');

//pdfController - Libro

Route::get('/libro/list','PdfController@libro_index');
Route::get('/libro','PdfController@libro_create')->name('libro.create');
Route::get('/libro/{id}','PdfController@libro_show');
Route::post('/libro','PdfController@libro_store')->name('libro.store');
Route::delete('/libro/{id}','PdfController@libro_destroy')->name('libro.destroy');
Route::get('/libro/{id}/edit','PdfController@libro_edit');
Route::put('/libro/{id}','PdfController@libro_update')->name('libro.update');

Route::get('/libro/download/{id}','PdfController@pdfFormLibro');
Route::get('/libro/download/pdf/{file}','PdfController@pdfLibro');

//pdfController - Informe Tecnico

Route::get('/informe/list','PdfController@informe_index');
Route::get('/informe','PdfController@informe_create')->name('informe.create');
Route::get('/informe/{id}','PdfController@informe_show');
Route::post('/informe','PdfController@informe_store')->name('informe.store');
Route::delete('/informe/{id}','PdfController@informe_destroy')->name('informe.destroy');
Route::get('/informe/{id}/edit','PdfController@informe_edit');
Route::put('/informe/{id}','PdfController@informe_update')->name('informe.update');

Route::get('/informe/download/{id}','PdfController@pdfFormInforme');
Route::get('/informe/download/pdf/{file}','PdfController@pdfInforme');

//pdfController - Gestion Academica

Route::get('/gestionAcademica','PdfController@gestion_index');
Route::get('/gestionAcademica/create','PdfController@gestion_create')->name('gestion.create');
Route::post('/gestionAcademica','PdfController@gestionAcademica')->name('gestion.store');
Route::delete('/gestionAcademica/{id}','PdfController@gestion_destroy')->name('gestion.destroy');
Route::get('/gestionAcademica/{gestion}','PdfController@gestion_show');
Route::get('/gestionAcademica/{gestion}/edit','PdfController@gestion_edit');
Route::put('/gestionAcademica/{gestion}','PdfController@gestion_update')->name('gestion.update');

Route::get('/gestionAcademica/download/{id}','PdfController@pdfFormGestion');
Route::get('/gestionAcademica/download/pdf/{file}','PdfController@pdfGestion');
//pdfController - Tutoria Individual

Route::get('/tutoria','PdfController@tutoria_index');
Route::get('/tutoria/create','PdfController@tutoria_create')->name('tutoria.create');
Route::post('/tutoria','PdfController@tutoriaIndividual')->name('tutoria.store');
Route::delete('/tutoria/{id}','PdfController@tutoria_destroy')->name('tutoria.destroy');
Route::get('/tutoria/{tutoria}','PdfController@tutoria_show');
Route::get('/tutoria/{tutoria}/edit','PdfController@tutoria_edit');
Route::put('/tutoria/{tutoria}','PdfController@tutoria_update')->name('tutoria.update');

Route::get('/tutoria/download/{id}','PdfController@pdfFormTutoria');
Route::get('/tutoria/download/pdf/{file}','PdfController@pdfTutoria');

//pdfController - Capacitacion

Route::get('/capacitacion','PdfController@capacitacion_index');
Route::get('/capacitacion/create','PdfController@capacitacion_create')->name('capacitacion.create');
Route::post('/capacitacion','PdfController@capacitacionDocente')->name('capacitacion.store');
Route::get('/capacitacion/{capacitacion}','PdfController@capacitacion_show');
Route::get('/capacitacion/{capacitacion}/edit','PdfController@capacitacion_edit');
Route::put('/capacitacion/{capacitacion}','PdfController@capacitacion_update')->name('capacitacion.update');
Route::delete('/capacitacion/{id}','PdfController@capacitacion_destroy')->name('capacitacion.destroy');

Route::get('/capacitacion/download/{id}','PdfController@pdfFormCapacitacion');
Route::get('/capacitacion/download/pdf/{file}','PdfController@pdfCapacitacion');

//pdfController - Tutoria Grupal

Route::get('/tutoriaG','PdfController@tutoriaG_index');
Route::get('/tutoriaG/create','PdfController@tutoriaG_create')->name('tutoriaG.create');
Route::post('/tutoriaG','PdfController@tutoriaGrupal')->name('tutoriaG.store');
Route::delete('/tutoriaG/{id}','PdfController@tutoriaG_destroy')->name('tutoriaG.destroy');
Route::get('/tutoriaG/{tutoriaG}','PdfController@tutoriaG_show');
Route::get('/tutoriaG/{tutoriaG}/edit','PdfController@tutoriaG_edit');
Route::put('/tutoriaG/{tutoriaG}','PdfController@tutoriaG_update')->name('tutoriaG.update');

Route::get('/tutoriaG/download/{id}','PdfController@pdfFormTutoriaG');
Route::get('/tutoriaG/download/pdf/{file}','PdfController@pdfTutoriaG');

//pdfController - Estadia

Route::get('/estadia','PdfController@estadia_index');
Route::get('/estadia/create','PdfController@estadia_create')->name('estadia.create');
Route::post('/estadia','PdfController@estadiaEmpresas')->name('estadia.store');
Route::delete('/estadia/{id}','PdfController@estadia_destroy')->name('estadia.destroy');
Route::get('/estadia/{estadia}','PdfController@estadia_show');
Route::get('/estadia/{estadia}/edit','PdfController@estadia_edit');
Route::put('/estadia/{estadia}','PdfController@estadia_update')->name('estadia.update');

Route::get('/estadia/download/{id}','PdfController@pdfFormEstadia');
Route::get('/estadia/download/pdf/{file}','PdfController@pdfEstadia');
//pdfController - Curso

Route::get('/curso','PdfController@curso_index');
Route::get('/curso/create','PdfController@curso_create')->name('curso.create');
Route::post('/curso','PdfController@curso')->name('curso.store');
Route::delete('/curso/{id}','PdfController@curso_destroy')->name('curso.destroy');
Route::get('/curso/{curso}','PdfController@curso_show');
Route::get('/curso/{curso}/edit','PdfController@curso_edit');
Route::put('/curso/{curso}','PdfController@curso_update')->name('curso.update');

Route::get('/curso/download/{id}','PdfController@pdfFormCurso');
Route::get('/curso/download/pdf/{file}','PdfController@pdfCurso');

//pdfController - Direccion

Route::get('/direccion','PdfController@direccion_index');
Route::get('/direccion/create','PdfController@direccion_create')->name('direccion.create');
Route::post('/direccion','PdfController@direccion')->name('direccion.store');
Route::delete('/direccion/{id}','PdfController@direccion_destroy')->name('direccion.destroy');
Route::get('/direccion/{direccion}','PdfController@direccion_show');
Route::get('/direccion/{direccion}/edit','PdfController@direccion_edit');
Route::put('/direccion/{direccion}','PdfController@direccion_update')->name('direccion.update');
Route::delete('/direccion/{id}','PdfController@direccion_destroy')->name('direccion.destroy');

Route::get('/direccion/download/{id}','PdfController@pdfFormDireccion');
Route::get('/direccion/download/pdf/{file}','PdfController@pdfDireccion');
//pdfController - Cuerpo Academico

Route::get('/cuerpoAcademico','PdfController@cuerpoAcademico_index');
Route::get('/cuerpoAcademico/create','PdfController@cuerpoAcademico_create')->name('cuerpoAcademico.create');
Route::post('/cuerpoAcademico','PdfController@cuerpoAcademico')->name('cuerpoAcademico.store');
Route::get('/cuerpoAcademico/{cuerpo}','PdfController@cuerpoAcademico_show');
Route::get('/cuerpoAcademico/{cuerpo}/edit','PdfController@cuerpoAcademico_edit');
Route::put('/cuerpoAcademico/{cuerpo}','PdfController@cuerpoAcademico_update')->name('cuerpoAcademico.update');
Route::delete('/cuerpoAcademico/{id}','PdfController@cuerpoAcademico_destroy')->name('cuerpoAcademico.destroy');

Route::get('/cuerpoAcademico/download/{id}','PdfController@pdfFormcuerpoAcademico');
Route::get('/cuerpoAcademico/download/pdf/{file}','PdfController@pdfcuerpoAcademico');

//pdfController - Capacitacion Diplomado

// Route::get('/capDiplomado','PdfController@diplomado_index');
// Route::get('/capDiplomado/create','PdfController@diplomado_create')->name('diplomado.create');
// Route::post('/capDiplomado','PdfController@capDiplomado')->name('diplomado.store');
// Route::get('/capDiplomado/{diplomado}','PdfController@diplomado_show');
// Route::get('/capDiplomado/{diplomado}/edit','PdfController@diplomado_edit');
// Route::put('/capDiplomado/{diplomado}','PdfController@diplomado_update')->name('diplomado.update');
// Route::delete('/capDiplomado/{id}','PdfController@diplomado_destroy')->name('diplomado.destroy');

// Route::get('/capDiplomado/download/{id}','PdfController@pdfFormDiplomado');
// Route::get('/capDiplomado/download/pdf/{file}','PdfController@pdfDiplomado');

//Documentos Controller - Dashboard

Auth::routes();
