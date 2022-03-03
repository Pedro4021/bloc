@extends('blog.layout.template')

@section('titulo')
Informacion Escolar
@endsection

@section('contenido')

<a href="#" class="image featured"><img src="images/edificio 1.png" alt="" /></a>
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
<h3>Matricula: {{$informacion->matricula}}</h3>
	
</p>
<p>
<h3>Grupo: {{$informacion->grupo}}</h3>

	
</p>
<p>

<h3>Carrera: {{$informacion->carrera}}</h3>
</p>
<p>
<h3>Cuatrimestre: {{$informacion->Cuatrimestre}}</h3>

</p>
<p>
<h3>Turno: {{$informacion->turno}}</h3>

</p>
<p>
<h3>Correo: {{$informacion->correo}}</h3>
	
</p>


											
						

@endsection