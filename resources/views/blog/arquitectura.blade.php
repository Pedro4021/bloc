@extends('blog.layout.templateCOPU')
@section('titulo')
<h1> SISTEMAS CON ARQUITECTURA DE CLIENTE SERVIDOR  </h1>
@endsection
@Section('contenido')
<span class="image main"><img src="images/server-gb36e3c6e5_1280.jpg" alt="" /></span>
								<h2>¿Qué son los sistemas con arquitectura cliente servidor?</h2>
								<p>     Este modelo es uno de los principales usados en muchísimos servicios y protocolos de Internet,
								</p>
								<p>    La arquitectura cliente servidor tiene dos partes claramente diferenciadas, por un lado la parte del servidor y por otro la parte de cliente o grupo de clientes donde lo habitual es que un servidor sea una máquina bastante potente con un hardware y software específico que actúa de depósito de datos y funcione como un sistema gestor de base de datos o aplicaciones.
								</p>
								<p>    En esta arquitectura el cliente suele ser estaciones de trabajo que solicitan varios servicios al servidor, mientras que un servidor es una máquina que actúa como depósito de datos y funciona como un sistema gestor de base de datos, este se encarga de dar la respuesta demandada por el cliente.	</p>
								<h2>CARACTERISTICAS </h2>
								
								<p>
							    - Facilita la integración entre diferentes sistemas y comparte información permitiendo por ejemplo que las máquinas ya existentes puedan ser utilizadas mediante una interfaz más amigable para el usuario. De esta manera podemos integrar varias PCs con sistemas medianos y grandes sin necesidad de que todos tengan que utilizar el mismo sistema operativo.</p>
								<p>
								- Al favorecer el uso de las interfaz de gráficas interactivas, los sistemas construidos bajo este esquema tienen una mayor interacción con el usuario
								</p>
								<p>
								- La estructura modular facilita de más la integración de nuevas tecnologías y el crecimiento de la infraestructura computacional favoreciendo así la estabilidad de las soluciones.	</p>
								<p>
								- El modelo cliente servidor permite además proporcionar a las diferentes áreas de una empresa generar un orden de trabajo en donde cada sector puede trabajar en su área pero accediendo al mismo servidor e información que los demás sin generar conflictos. Esto es de gran utilidad ya que si ponemos como ejemplo una empresa con varios empleados al momento de trabajar es importante que todos puedan hacerlo en simultáneo.	</p>
								
							</section>

					</div>
@endsection

@section('boton')
<h2>inicio</h2>
							<ul class="actions">
								<li><a href="{{route('hola')}}" class="button">Volver</a></li>
							</ul>
						</section>
@endsection