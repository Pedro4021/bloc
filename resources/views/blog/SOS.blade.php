@extends('blog.layout.templateCOPU')
@section('titulo')
<h1>SOCKETS </h1>
@endsection
@Section('contenido')
<span class="image main"><img src="images1/laptop-g9f6eb1780_1280.jpg" alt="" /></span>
								<h2>¿Qué son los sockets?</h2>
								
								<p>    Los sockets son un mecanismo que nos permite establecer un enlace entre dos programas que se ejecutan independientes el uno del otro (generalmente un programa cliente y un programa servidor) Java por medio de la librería java.net nos provee dos clases: Socket para implementar la conexión desde el lado del cliente y ServerSocket que nos permitirá manipular la conexión desde el lado del servidor.
								<p><span class="image left">
									<img src="images1/mensajes-sockets-cliente-servidor.png" alt="" />
								</span>
								
								<P>
									</P>
								
									<br><b>Comunicación cliente/servidor con Socket TCP:</b> 
									
									<br> -Crear un objeto de la clase Socket, indicando host y puerto donde corre el servicio.

									<br> - Obtener las referencias al stream de entrada y al de salida al socket.
									<br> -Leer desde y escribir en el stream de acuerdo al protocolo del servicio. Para ello emplear alguna de las facilidades del paquete java.io.
									<br>- Utilizar patrones relevantes en el diseño de la capa de presentación. Los patrones de diseño simplifican la implementación y mantenimiento de la capa de presentación y aportan la robustez de soluciones probadas y de éxito en la industria
									<br>- Cerrar los streams.
									<br>- Cerrar el socket.

									<br><b>La forma de implementar un servidor será:</b> 
									
									<br> -Crear un objeto de la clase ServerSocket para escuchar peticiones en el puerto asignado al servicio
									<br> - Esperar solicitudes de clientes
									<br> -Aceptar la conexión obteniendo un objeto de la clase Socket
									Obtener las referencias al stream de entrada y al de salida al socket anterior.
									Leer datos del socket, procesarlos y enviar respuestas al cliente, escribiendo en el stream del socket.Para ello emplear alguna de las facilidades del paquete java.io.<br>- Utilizar patrones relevantes en el diseño de la capa de presentación. Los patrones de diseño simplifican la implementación y mantenimiento de la capa de presentación y aportan la robustez de soluciones probadas y de éxito en la industria
									<br>- Cerrar los streams.
									<br>- Cerrar el socket.
							</section>

					</div>



@endsection

@section('boton')
<h2>inicio</h2>
							<ul class="actions">
								<li><a href="{{route('unidad2')}}" class="button">Volver</a></li>
							</ul>
@endsection