@extends('blog.layout.templateCOPU')
@section('titulo')
<h1>GESTOR DE TRANSACCIONES </h1>
@endsection
@Section('contenido')
<span class="image main"><img src="images1/digitization-gc71a95501_1280.jpg" alt="" /></span>
								<h2>¿Qué son los gestores de transacciones?</h2>
								<p>    conforman lo que se denomina el sistema de base de datos (a veces, se utiliza simplemente el término base de datos para denominarlo). En términos generales, un SGBD es un software que sigue un modelo de sistema de base de datos y, por lo tanto, resulta decisivo a la hora de configurarla, administrarla y utilizarla. Solo cuando el sistema gestor de base de datos está instalado y configurado, los usuarios pueden introducir y consultar los datos. Los permisos de lectura y escritura, así como las funciones de administración generales, se establecen mediante las interfaces específicas de la aplicación y el lenguaje de definición de datos correspondiente
									</p>
								<p>   
								</p>
								
								
								<h2>COMPONENTES DE UN SISTEMA GESTOR DE TRANSACCIONES </h2>
							</header>
							<ul class="features">
								<li>
									<span ><img src="images1/ENGUAJE.png" alt="" />
									</span>
									<h3>DICCIONARIO DE DATOS: </h3>
									<p>     consiste en una lista de metadatos que reflejan las características de los diversos tipos de datos incluidos en la base de datos. Además, estos metadatos informan sobre los permisos de uso de cada registro y su representación física. De esta manera, el diccionario proporciona toda la información relevante sobre los datos almacenados.
										<li>
									<span ><img src="images1/descargar (3).png" alt="" />
									</span>
									<h3>LENGUAJE DE DEFINICION DE DATOS: </h3>
									<p> el lenguaje de definición de datos, también llamado lenguaje de base de datos o DDL (data definition language), sirve para estructurar el contenido de la base de datos. Gracias a este lenguaje, es posible crear, modificar y eliminar objetos individuales, como referencias, relaciones o derechos de usuario.
											</li>
								<li>
									<span ><img src="images1/descargar4.jpeg" alt="" />
									</span>
									<h3>LENGUAJE DE MANIPULACION DE DATOS   </h3>
									<p> mediante el lenguaje de manipulación de datos o DML (data manipulation language), se pueden introducir nuevos registros en la base de datos, así como eliminar, modificar y consultar los que ya contiene. Este lenguaje también permite comprimir y extraer los datos.
											</li>
							</ul>	
							

						</p>
							</section>

							

					</div>


@endsection

@section('boton')
<h2>inicio</h2>
							<ul class="actions">
								<li><a href="{{route('unidad3 copy')}}" class="button">Volver</a></li>
							</ul>
@endsection