@extends('blog.layout.templateCOPU')
@section('titulo')
<h1> MODELO ACID </h1>
@endsection
@Section('contenido')
<span class="image main"><img src="images1/cloud-g2db02d1a7_1280.jpg" alt="" /></span>
								<h2>¿Qué es el modelo ACID?</h2>
								<p>    ACID es el conjunto de propiedades que garantizan que las transacciones de una Base de Datos se procesan de manera fiable. De forma muy resumida, las propiedades son:
									</p>
								<p>   
								</p>
								
								
								<h2>PROPIEDADES:  </h2>
							</header>
							<ul class="features">
								<li>
									<span ><img src="images1/ATOMICIDAD.jpeg" alt="" />
									</span>
									<h3>ATOMICIDAD </h3>
									<p>     La Atomicidad requiere que cada transacción sea "todo o nada": si una parte de la transacción falla, todas las operaciones de la transacción fallan, y por lo tanto la base de datos no sufre cambios. Un sistema atómico tiene que garantizar la atomicidad en cualquier operación y situación, incluyendo fallas de alimentación eléctrica, errores y caidas del sistema.
										<li>
									<span ><img src="images1/CONSITENCIA.jpeg" alt="" />
									</span>
									<h3>CONSISTENCIA </h3>
									<p> La propiedad de Consistencia se asegura que cualquier transacción llevará a la base de datos de un estado válido a otro estado válido. Cualquier dato que se escriba en la base de datos tiene que ser válido de acuerdo a todas las reglas definidas, incluyendo (pero no limitado a) los constraints, los cascades, los triggers, y cualquier combinación de estos.
								</li>
							</ul>	
							<ul class="features">
								<li>
									<span ><img src="images1/AISLAMIENTO.jpeg" alt="" />
									</span>
									<h3>AISLAMIENTO </h3>
									<p>     El aislamiento ("Isolation" en inglés) se asegura que la ejecución concurrente de las transacciones resulte en un estado del sistema que se obtendría si estas transacciones fueran ejecutadas una atrás de otra. Cada transacción debe ejecutarse en aislamiento total
											<li>
									<span ><img src="images1/DURABILIDAD;.jpeg" alt="" />
									</span>
									<h3>DURABILIDAD  </h3>
									<p> La durabilidad significa que una vez que se confirmó una transacción (commit), quedará persistida, incluso ante eventos como pérdida de alimentación eléctrica, errores y caidas del sistema. Por ejemplo, en las bases de datos relacionales, una vez que se ejecuta un grupo de sentencias SQL, los resultados tienen que almacenarse inmediatamente
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