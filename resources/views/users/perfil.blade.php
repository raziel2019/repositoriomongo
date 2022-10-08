@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')
	<div class="panel-header"  style="background: #69bb85!important; border-color:#69bb85!important;">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold"> Perfil</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div align="center"  class="card-title">Datos personales del usuario</div>
					</div>
					<table class="table table-hover table-dark">                   
						<div class="card text-center">
							<div class="card-body">
								<div class="avatar avatar-xl">
									<img src="{{ url('photo/profile/'.Auth::user()->avatar) }}" alt="..." class="avatar-img rounded-circle">
								</div>
								<table class="table table-striped table-striped-bg-default mb-3">
							</div>
							<a class="btn btn-primary" style="background: #69bb85!important; border-color:#69bb85!important;"href="{{ route('usuario.edit', auth()->id() ) }}">Editar Datos de Usuario</a>
						<div class="card-footer text-muted">
							<div class="accordion accordion-secondary">
								<div class="card">
									<div class="card-header collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<div class="span-icon">
											<div class="flaticon-box-1"></div>
										</div>
										<div class="span-title">
											Nombre de  Usuario
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
										<div class="card-body">
											{{ auth()->user()->name }}
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<div class="span-icon">
											<div class="flaticon-box-1"></div>
										</div>
										<div class="span-title">
											Password
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
										<div class="card-body">
											{{ 	 auth()->user()->password }}										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<div class="span-icon">
											<div class="flaticon-box-1"></div>
										</div>
										<div class="span-title">
											División
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
										<div class="card-body">
											{{ 	 auth()->user()->division }}
										</div>
									</div>
								</div>
							</div>
							<!-- segunda secion -->

							<div class="accordion accordion-secondary">
								<div class="card">
									<div class="card-header collapsed" id="headingfour" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
										<div class="span-icon">
											<div class="flaticon-box-1"></div>
										</div>
										<div class="span-title">
											CURP
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
										<div class="card-body">
											{{ 	 auth()->user()->curp }}
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header collapsed" id="headingfive" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
										<div class="span-icon">
											<div class="flaticon-box-1"></div>
										</div>
										<div class="span-title">
											RFC
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
										<div class="card-body">
											{{ 	 auth()->user()->rfc }}
										</div>
									</div>
								</div>
								
							<!-- tercera parte -->
							<div class="accordion accordion-secondary">
								<div class="card">
									<div class="card-header collapsed" id="headingseven" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
										<div class="span-icon">
											<div class="flaticon-box-1"></div>
										</div>
										<div class="span-title">
											Programa educativo   
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordion">
										<div class="card-body">
										{{ auth()->user()->programa}}
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header collapsed" id="headingeight" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
										<div class="span-icon">
											<div class="flaticon-box-1"></div>
										</div>
										<div class="span-title">
											Cuerpo Académico
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordion">
										<div class="card-body">
											{{ auth()->user()->cat_profesor}}
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header collapsed" id="headingnine" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
										<div class="span-icon">
											<div class="flaticon-box-1"></div>
										</div>
										<div class="span-title">
											Nivel en el SEI
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordion">
										<div class="card-body">
										{{ auth()->user()->sei}}
										</div>
									</div>
								</div>
							</div>
							<!-- Cuarta parte _-->
							<div class="accordion accordion-secondary">
								<div class="card">
									<div class="card-header collapsed" id="headingten" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
										<div class="span-icon">
											<div class="flaticon-box-1"></div>
										</div>
										<div class="span-title">
											Perfil  PRODEP
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapseten" class="collapse" aria-labelledby="headingten" data-parent="#accordion">
										<div class="card-body">
										{{ auth()->user()->prodep}}
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header collapsed" id="headingeleven" data-toggle="collapse" data-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
										<div class="span-icon">
											<div class="flaticon-box-1"></div>
										</div>
										<div class="span-title">
											Grado de estudios
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#accordion">
										<div class="card-body">
										{{ auth()->user()->grado}}
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header collapsed" id="headingtwelve" data-toggle="collapse" data-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
										<div class="span-icon">
											<div class="flaticon-box-1"></div>
										</div>
										<div class="span-title">
											Especialidad
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapsetwelve" class="collapse" aria-labelledby="headingtwelve" data-parent="#accordion">
										<div class="card-body">
										{{ auth()->user()->especialidad}}
										</div>
									</div>
								</div>
							</div>
						</div>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
