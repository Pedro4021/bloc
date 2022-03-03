@extends('blog.layout.templateCOPU')
@section('titulo')
<h1>LOGICAS EN CLIENTE/SERVIDOR</h1>
@endsection
@Section('contenido')
<span class="image main"><img src="images/light-bulb-g195193b5d_1280.jpg" alt="" /></span>
								
								<p>    Las diferentes arquitecturas cliente/servidor presentan variaciones en cómo las diferentes funciones de una aplicación de sistema se distribuyen entre clientes y servidores.
								 
								<h2>LOGICA DE ACCESO: </h2>
								<p><span class="image left">
									<img src="images/ACCESO.jpeg" alt="" />
								</span>
								<p>
									Es la capacidad de administrar todas las interacciones entre el software y los almacenes de datos (archivos, bases de datos, etc.), incluida la recuperación/consulta, la actualización, la seguridad y el control de concurrencia.
								    
									<br><b>PROCESO DE DISEÑO Y DESARROLLO:</b> 
									
									<br> - Crear un diseño general en la capa de acceso a datos 
									<br> 1.- Identificar los requerimientos de las fuentes de datos (data sources) 
									<br> 2.- Determinar el enfoque de acceso a los datos
									<br> 3.- Elejir como mapear estructuras de datos a los resultados de las fuentes de datos (data sources) 
									<br> 4.- Determinar como conectarse a las fuentes de datos
								    <br> 5.- Elejir la estrategia para tratar errores de conexión con las fuentes de datos  
									<br> - Diseñar sus componentes de acceso a datos
									<br> 1.- Enumerar las fuentes de datos a las que va a acceder 
									<br> 2.- Decidir el método de acceso para cada fuente de datos
									<br> 3.- Determinar que componentes auxiliares o librerías son necesarios para facilitar el acceso el acceso a los datos así como las tareas de desarrollo y mantenimiento
									<br> 4.- Estudiar si puede aplicar patrones de diseño en el acceso a los datos (Table Data Gateway, Query Object, Repository, etc.)
                                    <br> - Diseñar sus componentes auxiliares
									<br> 1.- Identificar que funcionalidades pueden moverse fuera de los componentes de acceso a datos y crear un componente auxiliar para su reutilización
									<br> 2.- Buscar librerías de componentes auxiliares disponibles
									<br> 3.- Considerar componentes auxiliares para solucionar problemas como conexiones, autenticación, monitorización o tratamiento de excepciones
									<br> 4.- Considerar añadir logging a sus componentes auxiliares

									



                                   


								</p>
								<br><br><h2>LOGICA DE PRESENTACION: </h2>
								<p><span class="image right">
									<img src="images/logica.jpeg" alt="" />
								</span>
								<p>
									Son funciones para administrar la interfaz entre los usuarios del sistema y el software, incluida la visualización e impresión de formularios e informes, y la posibilidad de validar las entradas del sistema.	
									<br><b>PROCESO DE DISEÑO Y DESARROLLO:</b> 
									
									<br> - Determinar como se van a presentar los datos. 
									Seleccionar el formato de su capa de presentación y decidir como presentar los datos en su interfaz de usuario 
									(en una columna, en dos columnas, con banners, con galerías de imágenes, etc.)
									   
									<br> - Eligir una estrategia de validación de datos.  
									Determinar su estrategia de lógica de negocio. 
									Teniendo claro que es lógica de negocio o proceso de datos y que es presentación de datos, podemos desacoplar (separar) las capas
									<br> - Establecer una estrategia de comunicación con otras capas. 
									Si su aplicación tiene una arquitectura multicapas, elija como la capa de presentación se va a comunicar con la capa de negocios o
									 con la capa de datos. Un patrón o modelo vista controlador puede simplificar este diseño.
									<br>- Utilizar patrones relevantes en el diseño de la capa de presentación. Los patrones de diseño simplifican la implementación y mantenimiento de la capa de presentación y aportan la robustez de soluciones probadas y de éxito en la industria
									<br>- Diseñar siempre separando entre componentes de presentación y componentes de proceso. Crear componentes para renderizar y mostrar los datos y crear componentes para orquestar y sincronizar las interacciones complejas del usuario
									Considerar las buenas prácticas en el diseño de interfaces de usuario (Human Interface guidelines). Aplicar y ajustar estas prácticas generales a como se realizan en su organización e incluso en su propio país. 
									<br>- Apóyarse en encuestas, cuestionarios y entrevistas para conocer el tipo de presentación que el usuario de negocio demanda y ajuste el diseño lo más posible a sus requerimientos, necesidades y gustos


									
								
								
								
								</p>
								<br><br><h2>LOGICA DE NEGOCIO A DATOS </h2>
								<p><span class="image left">
									<img src="images/negocio.jpeg" alt="" />
								</span>
								<p>
									Funciones que convierten entradas en salidas, que incluyen todo, desde sumas simples hasta matemáticas complejas, finanzas, ciencia, modelos de ingeniería y más.
								
									<br><b>PROCESO DE DISEÑO Y DESARROLLO:</b> 
									<br> - Crear un diseño general de la capa de negocio
									<br> 1.- Identificar los consumidores de la capa de negocio
									<br> 2.- Determinar como se va a exponer la capa de negocio
									<br> 3.- Determinar los requerimientos de seguridad de la capa de negocio
									<br> 4.- Determinar los requerimientos de validación de la capa de negocio
								    <br> 5.- Determinar los requerimientos de caché de la capa de negocio
									<br> 6.- Determinar la estrategia de tratamiento de excepciones de la capa de negocio
									<br> - Diseñar los componentes de negocio
									<br> 1.- Identificar los componentes de negocio que la aplicación va a utilizar
									<br> 2.- Determinar las interacciones, acoplamiento y ubicación de los componentes de negocio
									<br> 3.- Seleccionar el soporte transaccional adecuado
									<br> 4.- Identificar como se van a tratar las reglas de negocio
									<br> 5.- Identificar los patrones que se ajusten a los requerimientos de negocio

									<br> - Diseñar las entidades de negocio
									<br> 1.- Identificar los formatos de datos comunes de las entidades de negocio
									<br> 2.- Seleccionar el formato de datos adecuado
									<br> 3.- Seleccionar el diseño correcto de la entidad de negocio
									<br> 4.- Seleccionar el tipo de serialización que vamos a necesitar

									<br> - Diseñar los componentes de flujos de trabajo
									<br> 1.- Identificar los escenarios de uso de flujos de trabajo
									<br> 2.- Determinar cuantas reglas van a ser tratadas
									<br> 3.-Determinar como van a ser tratadas las reglas
									<br> 4.- Seleccionar una solución de flujo de trabajo para nuestra aplicación
									<BR> 5.- Crear componentes de negocio que soporten flujos de trabajo

									<br> - Decidir cuantas capas de negocio vamos a tener en nuestra aplicación Web. El uso de varias capas de negocio simplifica el mantenimiento de nuestra aplicación. Solo modificamos o evolucionamos la capa de negocio que sea necesario y no toda la capa de negocio lo cuál tendría un impacto mucho mayor
									   
									<br> - EIdentificar las responsabilidades de nuestra capa de negocio.  Debemos crear una capa de negocio para procesar reglas de negocio complejas, transformaciones de datos y realizar validaciones.
									
									<br> - No mezclar diferentes tipos de componentes en la capa de negocio. Una de las misiones fundamentales de la capa de negocio es desacoplar la lógica de negocio de la capa de presentación y de la capa de acceso a datos

									<br>- Reutilizar lógica de negocio común. Otra de las misiones fundamentales de la capa de negocio es la de crear en un espacio común, lógica de negocio que pueda ser reutilizable, simplificando el mantenimiento y reduciendo el tamaño de nuestra aplicación Web
									
									<br>- dentificar los consumidores de la capa de negocio. Esto nos va a ayudar a determinar como vamos a exponer nuestra capa de negocio (como otras capas de la aplicación van a interactuar con ella). Por ejemplo, si una aplicación externa va a interactuar con la capa de negocio, deberíamos exponerla como un servicio
									

								</p>

							</section>

					</div>



@endsection

@section('boton')
<h2>inicio</h2>
							<ul class="actions">
								<li><a href="{{route('unidad2')}}" class="button">Volver</a></li>
							</ul>
@endsection