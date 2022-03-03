@extends('blog.layout.templateCOPU')
@section('titulo')
<h1>PROGRAMA MAESTRO  </h1>
@endsection
@Section('contenido')
<span class="image main"><img src="images/server-gb36e3c6e5_1280.jpg" alt="" /></span>
								<h2>¿Qué son los programa maestro?</h2>
								<p>     El Programa Maestro de Producción, conocido como Programa maestro o MPS -en inglés Master production Schedule- es un programa que muestra qué productos se fabricarán y especifica en qué cantidades se hará durante un período de tiempo.

									Se trata de un programa generado a partir de la desagregación de la planificación de la producción agregada, que se encargará de guiar las acciones de producción a lo largo de aproximadamente 6 a 12 meses normalmente sobre una base semanal, teniendo en cuenta los pedidos existentes.</p>
								<p>     el plan maestro de producción es un programa que contiene todo lo que se va a producir y cuándo se va a producir.

									De esta manera, se definen las fechas de entrega de cada producto y se analiza cuántas unidades se pueden fabricar en un intervalo de tiempo determinado.
									
									Esto mantiene el orden y la organización operativa de toda la cadena de producción.</p>
									<h2>TAREAS Y PPROCESOS DE PROGRAMA MAESTRO</h2>
								
								<p>
							    - Abrir un puerto local bien conocido al cual pueda acceder los clientes.</p>
								<p>
								- Esperar las peticiones de los clientes.
								</p>
								<p>
								- Elegir un puerto local para las peticiones que llegan en informar al cliente del nuevo puerto, (innecesario en la mayoría de los casos).</p>
								<p>
								- Iniciar un programa esclavo o proceso hijo que atienda la petición en el puerto local, (el esclavo cuando termina de manejar una petición no se queda esperando por otras).</p>
								<p>
									-Volver a la espera de peticiones mientras los esclavos, en forma concurrente, se ocupan de las anteriores peticiones.</p>
								
							</section>

					</div>



@endsection

@section('boton')
<h2>inicio</h2>
							<ul class="actions">
								<li><a href="{{route('hola')}}" class="button">Volver</a></li>
							</ul>
@endsection