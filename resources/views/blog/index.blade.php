@extends('blog.layout.template')

@section('titulo')
Informacion Personal
@endsection

@section('contenido')

<div class="row gtr-150">
							<div class="col-8 col-12-narrower">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<header>
												<h3>Informacion:</h3>
											</header>
											
											<p>

											<h3>Nombre: {{$informacion->nombre}}</h3>
</p>
<p>
<h3>Apellido Paterno: {{$informacion->apellido_paterno}}</h3>
	
</p>
<p>
<h3>Apellido Materno: {{$informacion->apellido_materno}}</h3>
	
</p>
<p>
<h3>Edad: {{$informacion->edad}}</h3>
	
</p>
<p>
<h3>Correo: {{$informacion->correo}}</h3>
	
</p>

											
										</section>
										

							</div>
							<div class="col-4 col-8-narrower imp-narrower">

								<!-- Content -->
									<article id="content">
										
										<a href="#" class="image featured"><img src="images/less.jpg" alt="" /></a>
										
							</div>
						</div>


		

		@endsection
