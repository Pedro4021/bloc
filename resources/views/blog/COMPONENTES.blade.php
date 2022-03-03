@extends('blog.layout.templateCOPU')
@section('titulo')
<h1> COMPONENTES DEL MODELO CLIENTE SERVIDOR  </h1>
@endsection
@Section('contenido')
<span class="image main"><img src="images/technology-g8a1aeff11_1280.jpg" alt="" /></span>
								
								<p>  La principal importancia de este modelo es que permite conectar a varios clientes a los servicios que provee un servidor y como sabemos hoy en día, la mayoría de las aplicaciones y servicios tienen como gran necesidad que puedan ser consumidos por varios usuarios de forma simultanea.	</p>
								
								
								<h2>COMPONENTES </h2>
							</header>
							<ul class="features">
								<li>
									<span ><img src="images/red.jpeg" alt="" />
									</span>
									<h3> Red:</h3>
									<p>    Una red es un conjunto de clientes, servidores y base de datos unidos de una manera física o no física en el que existen protocolos de transmisión de información establecidos.</li>
								<li>
									<span ><img src="images/clin.png" alt="" />
									</span>
									<h3>Cliente:  </h3>
									<p> El concepto de cliente hace referencia a un demandante de servicios, este cliente puede ser un ordenador como también una aplicación de informática, la cual requiere información proveniente de la red para funcionar.
									
								</li>
								<li>
									<span ><img src="images/servi.jpeg" alt="" />
									</span>
									<h3>Servidor:  </h3>
									<p> Un servidor hace referencia a un proveedor de servicios, este servidor a su vez puede ser un ordenador o una aplicación informática la cual envía información a los demás agentes de la red
									
								</li>
								<ul class="features">
									<li>
										<span ><img src="images/proto.png" alt="" />
										</span>
										<h3> Protocolo:</h3>
										<p>    Un protocolo es un conjunto de normas o reglas y pasos establecidos de manera clara y concreta sobre el flujo de información en una red estructurada.	<li>
										<span ><img src="images/servi.jpeg" alt="" />
										</span>
										<h3>Servicios: </h3>
										<p> Un servicio es un conjunto de información que busca responder las necesidades de un cliente, donde esta información pueden ser mail, música, mensajes simples entre software, videos, etc.	
									</li>
									<li>
										<span ><img src="images/bd.png" alt="" />
										</span>
										<h3>Base de datos:  </h3>
										<p> Son bancos de información ordenada, categorizada y clasificada que forman parte de la red, que son sitios de almacenaje para la utilización de los servidores y también directamente de los clientes.
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