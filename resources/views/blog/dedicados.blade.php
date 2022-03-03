@extends('blog.layout.templateCOPU')
@section('titulo')
<h1>SISTEMAS DE COMPUTO DEDICADOS  </h1>
@endsection
@Section('contenido')
<span class="image main"><img src="images/server-gb36e3c6e5_1280.jpg " alt="" /></span>
								<h2>¿Qué son los sistemas de computo dedicados?</h2>
								<p>    Un servidor dedicado es un equipo informático físico que destina todos sus recursos a proporcionar información y atender las peticiones de otro ordenador (cliente) que ha contratado sus servicios. Por tanto, a diferencia de un servidor compartido, el dedicado trabaja en exclusiva para un solo cliente. Existe un amplio abanico de servidores dedicados entre los que poder elegir para el alojamiento en Internet.
								</p>
								<p>   	Un servidor dedicado se caracteriza, esencialmente, por ofrecer sus recursos y servicios a un único individuo, aunque también son importantes los siguientes aspectos:</p>
								
								
								<h2>CARACTERISTICAS </h2>
								
								<p>
							    - Se localiza, por regla general, en un centro de datos, lugar en el que se encuentran todos los recursos que una entidad necesita para procesar su información.</p>
								<p>
								- Proporciona más seguridad y mayor velocidad, ya que los recursos de este gran ordenador central no se comparten con otros usuarios.	</p>
								<p>
								-Está destinado a alojar sitios web con un elevado tráfico, siendo recomendable por tanto que las que contratan estos servicios reciban un gran número de visitas diarias.</p>
								<p>
								- Posee una alta cuota mensual, superando, incluso, los 100 euros al mes, ya que, entre otras cosas, es un solo cliente el que hace frente a los gastos de mantenimiento.
								</p>
								<p>
								- Cuenta, en la mayoría de los casos, con un servicio de atención disponible las 24 horas del día y los 365 días del año.
								</p>
																
								es que un único cliente puede disfrutar y hacer uso de todos los recursos de la máquina, la cual, además, es capaz de adaptarse por completo a las necesidades del cliente por ser libremente configurable. Asimismo, el individuo controla por entero todas las aplicaciones, cuyas actualizaciones son muy sencillas y gestionables.
							</p>
							  
						

							</section>

					</div>
@endsection

@section('boton')
<h2>inicio</h2>
							<ul class="actions">
								<li><a href="{{route('COMPUTADORAS')}}" class="button">Volver</a></li>
							</ul>
@endsection