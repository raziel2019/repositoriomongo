<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@yield('Titulo') - Universidad Tecnológica de Cancún</title> 
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('assets/img/icon.ico') }}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('assets/css/fonts.min.css') }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
    <style>
		.sidebar .nav>.nav-item a p, .sidebar[data-background-color=white] .nav>.nav-item a p {
    font-size: 14px;
    margin-bottom: 0;
    margin-right: 5px;
    white-space: nowrap;
    color: #a7b1c2 !important;
}
.nav-search .input-group {
    border: 1px solid #eee;
    background: #eee;
    border-radius: 5px;
    top: 1px;
}
.sidebar .nav>.nav-item a i, .sidebar[data-background-color=white] .nav>.nav-item a i {
    color: #a7b1c2 !important;
    margin-right: 15px;
    width: 25px;
    text-align: center;
    vertical-align: middle;
    float: left;
    font-size: 18px;
    line-height: 30px;
}
.sidebar .nav>.nav-item a, .sidebar[data-background-color=white] .nav>.nav-item a {
    display: flex;
    align-items: center;
    color: white !important;
    padding: 6px 25px;
    width: 100%;
    font-size: 14px;
    font-weight: 400;
    position: relative;
    margin-bottom: 3px;
}
.sidebar .user .info a>span, .sidebar[data-background-color=white] .user .info a>span {
    font-size: 14px;
    font-weight: 400;
    color: #a7b1c2 !important;
    display: flex;
    flex-direction: column;
}

.sidebar .user .info a>span .user-level, .sidebar[data-background-color=white] .user .info a>span .user-level {
    color: white !important;
    font-weight: 600;
    font-size: 12px;
    margin-top: 5px;
}
.sidebar .nav .nav-section .text-section, .sidebar[data-background-color=white] .nav .nav-section .text-section {
    padding: 2px 30px;
    font-size: 12px;
    color: #a7b1c2 !important;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .5px;
    margin-bottom: 12px;
    margin-top: 20px;
}
	</style>
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/atlantis.min.css') }}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" style="background: #2f4050;">
				
				<a href="/home" class="logo">
                    <img src="{{ asset('assets/img/Logo-Header.png') }}" style="height:inherit;" alt="navbar brand" class="navbar-brand">  
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" style="background:#f3f3f4;">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form action="/Adminsearch" method="GET" class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" name="Adminsearch" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						                        
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{ url('photo/profile/'.Auth::user()->avatar) }}" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{ url('photo/profile/'.Auth::user()->avatar) }}" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
											<h4>
											@if (Auth::check())
											{{ auth()->user()->name}}
												@endif
												</h4>
												<p class="text-muted">
												@if (Auth::check())
												{{ auth()->user()->email}}
												@endif
												</p><a href="/perfil" class="btn btn-xs btn-secondary btn-sm" style="background: #69bb85 !important; border: #69bb85 !important;">Ver Perfil</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="/perfil">Mi Perfil</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
													  document.getElementById('logout-form').submit();">
										 {{ __('Logout') }}
									 </a>
 
									 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										 @csrf
									 </form>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar" style="background: #2f4050;">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ url('photo/profile/'.Auth::user()->avatar) }}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									@if (Auth::check())
									{{ auth()->user()->name}}
									@endif
									<span class="user-level">
										@if (Auth::check())
										{{ auth()->user()->cat_profesor}}
										@endif
									</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="/perfil">
											<span class="link-collapse">Mi perfil</span>
										</a>
									</li>
									<li>
										<a @if (Auth::check())
										 href="{{ route('usuario.edit', auth()->id() ) }}"
										 @endif>
											<span class="link-collapse">Editar Perfil</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="/Administrador">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
							
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Herramientas de trabajo</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Productos académicos</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
								<li>
										<a href="/asesoria/list">
											<span class="sub-item">Asesorias</span>
										</a>
									</li>
									<li>
										<a href="/material/list">
											<span class="sub-item">Material Didactico</span>
										</a>
									</li>

									<li>
										<a href="/proyecto/list">
											<span class="sub-item">Proyecto de Investigacion</span>
										</a>
									</li>
									<li>
										<a href="/difusion/list">
											<span class="sub-item">Artículo de difusión y divulgación</span>
										</a>
									</li>
									<li>
										<a href="/revista/list">
											<span class="sub-item">Artículo en revista</span>
										</a>
									</li>
									<li>
										<a href="/arbitrado/list">
											<span class="sub-item">Artículo Arbitrado</span>
										</a>
									</li>
									<li>
										<a href="/libro/list">
											<span class="sub-item">Libro</span>
										</a>
									</li>
									<li>
										<a href="/informe/list">
											<span class="sub-item">Informe Tecnico</span>
										</a>
									</li>
								
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="/gestionAcademica">
								<i class="fas fa-th-list"></i>
								<p>Gestión académica</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Tutoría</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="/tutoriaG">
											<span class="sub-item">Tutoría Grupal</span>
										</a>
									</li>
									<li>
										<a href="/tutoria">
											<span class="sub-item">Tutoría Individual</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#capacitacion">
								<i class="fas fa-pen-square"></i>
								<p>Capacitación profesional</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="capacitacion">
								<ul class="nav nav-collapse">
									<li>
										<a href="/curso">
											<span class="sub-item">Docencia</span>
										</a>
									</li>
									<li>
										<a href="/direccion">
											<span class="sub-item">Dirección individualizada</span>
										</a>
									</li>
									<li>
										<a href="/estadia">
											<span class="sub-item">Estadía en empresas</span>
										</a>
									</li>
									<li>
										<a href="/cuerpoAcademico">
											<span class="sub-item">Cuerpo académico</span>
										</a>
									</li>
									<li>
										<a href="/capacitacion">
											<span class="sub-item">Capacitación docente</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#perfiles">
								<i class="fas fa-layer-group"></i>
								<p>Perfiles de usuario</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="perfiles">
								<ul class="nav nav-collapse">
								<li>
										<a href="/AdminUsuarios">
											<span class="sub-item">Gestion de Usuarios</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
        <div class="main-panel">
            <main class="content">
                @yield('content')
            </main>
            <footer class="footer" >
				<div class="container-fluid">
					<nav class="pull-left">
						<div class="copyright ml-auto">
							<b>Copyright</b> Universidad Tecnológica de Cancún @ 2020
						</div>	
					</nav>		
				</div>
			</footer>
		</div>
		
		
		<!-- Custom template | don't include it in your project! -->
		
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

	<!-- jQuery UI -->
	<script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>


	<!-- Chart JS -->
	<script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

	<!-- Chart Circle -->
	<script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

	<!-- Datatables -->
	<script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{ asset('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

	<!-- Sweet Alert -->
	<script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

	<!-- Atlantis JS -->
	<script src="{{ asset('assets/js/atlantis.min.js') }}"></script>

    <script>
	// Script del Bar char
		$('#barChart').sparkline([102,109,120,99,110,80,87,74,102,109,120,99,110,80,87,74], {
			type: 'bar',
			height: '200',
			barWidth: 18,
			barSpacing: 20,
			barColor: '#177dff'
		});
	</script>
</body>
</html>