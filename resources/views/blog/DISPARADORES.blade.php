@extends('blog.layout.templateCOPU')
@section('titulo')
<h1>DISPARADORES  </h1>
@endsection
@Section('contenido')
<span class="image main"><img src="images1/cloud-g491bb5238_1280.jpg" alt="" /></span>
								<h2>¿Qué son los disparadores ?</h2>
								<p>  Es   una acción que la base de datos debe llevar a cabo cuando se produce algún suceso relacionado con la misma. Los disparadores (triggers) pueden utilizarse para completar la integridad referencial, también para imponer reglas de negocio complejas o para auditar cambios en los datos. El código contenido en un disparador, denominado cuerpo del disparador, está formado por bloques PL/SQL. La ejecución de disparadores es transparente al usuario.

								</p>
								
								
								 
								<ul class="features">
									<li>
										<span ><img src="images1/ATOMICIDAD.jpeg" alt="" />
										</span>
										<h3>DISPARADOR DE NIVEL FILA: </h3>
										<p>     se ejecutan una vez para cada fila afectada por una instrucción DML. Los disparadores de nivel de fila se crean utilizando la cláusula for each row en el comando create trigger.
											<li>
										<span ><img src="images1/INEA.png" alt="" />
										</span>
										<h3>DISPARADOR DE NIVEL DE INTRODUCCION </h3>
										<p> se ejecutan una vez para cada intrucción DML. Por ejemplo, si una única intrucción INSERT inserta 500 filas en una tabla un disparador de nivel de instrucción para dicha tabla sólo se ejecutará una vez. Los disparadores de nivel de instrucción son el tipo predeterminado que se crea con el comando create trigger.
												</li>
									<li>
										<span ><img src="images1/BB.jpeg" alt="" />
										</span>
										<h3>DISPARADOR BEFORE Y AFTER  </h3>
										<p> Luesto que los disparadores son ejecutados por sucesos, puede establecerse que se produzcan inmediatamente antes (before) o después (after) de dichos sucesos.
												</li>
								</ul>	
								<ul class="features">
									<li>
										<span ><img src="images1/DD.jpeg" alt="" />
										</span>
										<h3>DISPARADOR INSTEAD OF  </h3>
										<p>     puede utilizar INSTEAD OF para indicar a Oracle lo que tiene que hacer en lugar de realizar las acciones que invoca el disparador
												<li>
										<span ><img src="images1/descargar (2).png" alt="" />
										</span>
										<h3>DISPARADOR DE ESQUEMA   </h3>
										<p> puede crear disparadores sobre operaciones en el nivel de esquema tales como create table, alter table, drop table, audit, rename, truncate y revoke. Puede incluso crear disparadores para impedir que los usuarios eliminen sus propias tablas. En su mayor parte, los disparadores de nivel de esquema proporcionan dos capacidades: impedir operaciones DDL y proporcionar una seguridad adicional que controle las operaciones DDL cuando éstar se producen.
												</li>
														<li>
										<span ><img src="images1/CC.png" alt="" />
										</span>
										<h3>DISPARADOR EN NIVEL DE BASE DE DATOS   </h3>
										<p> Puede crear disparadores que se activen al producirse sucesos de la base de datos, incluyendo errores, inicios de sesión, conexiones y desconexiones. Puede utilizar este tipo de disparador para automatizar el mantenimiento de la base de datos o las acciones de auditoría.

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