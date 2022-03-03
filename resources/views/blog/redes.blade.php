@extends('blog.layout.templateCOPU')
@section('titulo')
<h1>SISTEMAS DE CONEXION  </h1>
@endsection
@Section('contenido')
<span class="image main"><img src="images/social-media-g29a7efdd3_1280.png" alt="" /></span>
								<h2>¿Qué son los sistemas de conexion?</h2>
								<p>  es una red de comunicaciones en la cual los clientes están conectados a un servidor, en el que se centralizan los diversos recursos y aplicaciones con que se cuenta; y que los pone a disposición de los clientes cada vez que estos son solicitados.
								</p>
								
								
							
								
							<header class="major">
								<h2>TIPOS DE SISTEMAS CONEXION </h2>
							</header>
							<ul class="features">
								<li>
									<span class="image"><img src="images/sccc.jpeg"  /></span>
									<h3>SISTEMAS DE CONEXION LINEA</h3>
									<footer class="major">
										<ul class="actions special">
											<li><a href="{{route('CONEXION')}}" class="button">Leer mas</a></li>
										</ul>
									</footer>
								</li>
								<li>
									<span class="image"><img src="images/sr.jpeg"  /></span>
									
									<h3>SISTEMAS ATRAVES DE RED </h3>
									
									<footer class="major">
										<ul class="actions special">
											<li><a href="{{route('red')}}" class="button">leer mas </a></li>
										</ul>
									</footer>
								</li>
						

							</section>

					</div>



@endsection

@section('boton')
<h2>inicio</h2>
							<ul class="actions">
								<li><a href="{{route('hola')}}" class="button">Volver</a></li>
							</ul>
@endsection