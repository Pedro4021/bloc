@extends('blog.layout.templateCOPU')
@section('titulo')
<h1>COMPUTO EN LA NUBE</h1>
@endsection
@Section('contenido')
<span class="image main"><img src="images/circuit-board-ge01c96539_1280.png" alt="" /></span>
								<h2>¿Qué es la computacion de la nube?</h2>
								<p>
									<span class="image right"><img src="images/compu.jpeg" alt="" />
									</span>La computación en la nube (o cloud computing, en inglés) es una tecnología que permite acceder remotamente, de cualquier lugar del mundo y en cualquier momento, a softwares, almacenamiento de archivos y procesamiento de datos a través de Internet, sin la necesidad de conectarse a un ordenador personal o servidor local.

									En otras palabras, la computación en la nube utiliza la conectividad y gran escala de Internet para hospedar los más variados recursos, programas e información, y permite que el usuario ingrese a ellos través de cualquier ordenador, tablet o celular.
		
							<p>

							</p>	
								
							<h2>¿Para qué sirve la computación en la nube?</h2>
								<p><span class="image left">
									<img src="images/nube.png" alt="" />
								</span>La reducción de costos con infraestructura: ya que elimina el gasto capital con compras de hardwares y softwares, instalación y manutención;
								La economía de espacio: dado que los recursos permanecen almacenados online;
								La centralización de la información: evitando que todos los datos se mantengan en distintos programas, con diferentes tipos de autenticación y formas de acceso;
								El aumento o disminución acorde con la necesidad del cliente: gracias al poder de elasticidad que proporciona la cantidad ideal de recursos, almacenamiento y procesamientos;
								El trabajo remoto: funcionarios de empresas pueden acceder a todos los datos a través de cualquier ordenador, notebook, tablet o smartphone, desde que estén conectados a Internet</p>
							
						

							</section>

					</div>


@endsection

@section('boton')
<h2>inicio</h2>
							<ul class="actions">
								<li><a href="{{route('hola')}}" class="button">Volver</a></li>
							</ul>
@endsection