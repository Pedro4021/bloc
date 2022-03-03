@extends('blog.layout.templateCOPU')
@section('titulo')
<h1>PROTOCOLOS DE COMUNICACION DE REDES  </h1>
@endsection
@Section('contenido')
<span class="image main"><img src="images/fiber-gfc2f0c5bb_1280.jpg" alt="" /></span>
								<h2>¿Qué son los protocolos de comunicacion de red?</h2>
								<p>    La interconexión de sistemas o redes de computadoras son la base de las comunicaciones hoy en día y están diseñadas bajo múltiples protocolos de comunicación. Por ejemplo, existen muchos protocolos al establecer una conexión a internet y según el tipo que se necesite establecer, dichos protocolos van a variar. Además, la comunicación a internet no es el único tipo de comunicación cuando hablamos de transmisión de datos e intercambio de mensajes en redes. En todos los casos, los protocolos de red definen las características de la conexión.
								</p>
								<p>   Un protocolo es un conjunto de reglas: los protocolos de red son estándares y políticas formales, conformados por restricciones, procedimientos y formatos que definen el intercambio de paquetes de información para lograr la comunicación entre dos servidores o más dispositivos a través de una red.
								</p>
								
								
								<h2>TIPOS DE PROTOCOLO DE RED </h2>
							</header>
							<ul class="features">
								<li>
									<span ><img src="images/TC.jpeg" alt="" />
									</span>
									<h3>PROTOCOLOS DE COMUNICACION DE RED</h3>
									<p>     protocolos de comunicación de paquetes básicos como TCP / IP y HTTP.</p>
								</li>
								<li>
									<span ><img src="images/HHTPPS.png" alt="" />
									</span>
									<h3>PROTOCOLOS DE SEGURIDAD DE RED </h3>
									<p> implementan la seguridad en las comunicaciones de red entre servidores, incluye HTTPS, SSL y SFTP.</p>
								
									
								</li>
								<li>
									<span ><img src="images/snmp.jpeg" alt="" />
									</span>
									<h3>PROTOCOLOS DE GESTION DE RED </h3>
									<p> proporcionan mantenimiento y gobierno de red, incluyen SNMP e ICMP..</p>
								
									
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