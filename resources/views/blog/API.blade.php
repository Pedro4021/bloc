@extends('blog.layout.templateCOPU')
@section('titulo')
<h1> NTERFAZ DE PROGRAMACION DE APLICACIONES </h1>
@endsection
@Section('contenido')

<span class="image main"><img src="images1/laptop-g9f6eb1780_1280.jpg" alt="" /></span>
								<h2>¿Qué son las APIS?</h2>
								
								<p>    API son las siglas en inglés de Application Programming Interface, que se puede traducir como interfaz de programación de aplicaciones. Como su nombre implica, una API permite a programadores externos acceder a determinadas funciones. Las interfaces actúan como punto de acceso para otros programas. A través de una API, los dos programas pueden comunicarse entre sí, intercambiar datos y transferir comandos. Esto funciona tanto para el software de escritorio como para las aplicaciones móviles o las aplicaciones web. También se puede estructurar un solo programa de tal manera que los diferentes módulos se comuniquen entre sí a través de interfaces.
								
								<p><span class="image left">
									<img src="images1/API-page-graphic.png" alt="" />
								</span>
								<p>
									 

									Las API permiten que sus productos y servicios se comuniquen con otros, sin necesidad de saber cómo están implementados. Esto simplifica el desarrollo de las aplicaciones y permite ahorrar tiempo y dinero. Las API le otorgan flexibilidad; simplifican el diseño, la administración y el uso de las aplicaciones; y ofrecen oportunidades de innovación, lo cual es ideal al momento de diseñar herramientas y productos nuevos (o de gestionar los actuales).


								</p>
								<P>
									Las API son un medio simplificado para conectar su propia infraestructura a través del desarrollo de aplicaciones nativas de la nube, pero también le permiten compartir sus datos con clientes y otros usuarios externos. Las API públicas aportan un valor comercial único porque simplifican y amplían sus conexiones con los partners y, además, pueden rentabilizar sus datos (un ejemplo conocido es la API de Google Maps).
									</P>
								

							</section>

					</div>

@endsection

@section('boton')
<h2>inicio</h2>
							<ul class="actions">
								<li><a href="{{route('unidad2')}}" class="button">Volver</a></li>
							</ul>
						
@endsection