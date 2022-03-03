<?php

use Illuminate\Support\Facades\Route;
use App\Models\informacion;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
 $informacion= new informacion();
 $informacion->nombre= 'Lesly Pholett';
 $informacion->apellido_paterno='Ibarra';
 $informacion->apellido_materno='Pantoja';
 $informacion->edad='20';
 $informacion ->correo='lesly_1320114006@uptecamac.edu.mx';


 
 
    return view ('blog.index',['informacion'=>$informacion]);
  //echo ("hola mundo");

}) ->name('index');

Route::get('/hobis', function () {
    return view ('blog.hobis');
    //echo ("hola mundo");
  
  }) ->name('hobis');

  Route::get('/informacionescolar', function () {
    $informacion= new informacion();
    $informacion->nombre= 'Lesly Pholett';
    $informacion->apellido_paterno='Ibarra';
    $informacion->apellido_materno='Pantoja';
    $informacion ->correo='lesly_1320114006@uptecamac.edu.mx';
    $informacion ->matricula='1320114006';
    $informacion ->grupo = '3522';
    $informacion ->Cuatrimestre= 'Quinto cuatrimestre';
    $informacion ->carrera= 'Ingenieria en software';
    $informacion ->turno= 'vespertino';


    return view ('blog.informacionescolar',['informacion'=>$informacion]);
    //echo ("hola mundo");
  
  }) ->name('informacionescolar');


  Route::get('/arquitectura', function () {
    
   
   
    
    
       return view ('blog.arquitectura');
     
   
   }) ->name('index');
   Route::get('/hola', function () {
    
   
   
    
    
    return view ('blog.hola');
  

}) ->name('hola');

Route::get('/ACID', function () {
    
   
   
    
    
  return view ('blog.ACID');


}) ->name('ACID');
Route::get('/API', function () {
    
   
   
    
    
  return view ('blog.API');


}) ->name('API');
Route::get('/arqui', function () {
    
   
   
    
    
  return view ('blog.arqui');


}) ->name('arqui');

Route::get('/centralizado', function () {
    
   
   
    
    
  return view ('blog.centralizado');


}) ->name('centralizado');

Route::get('/COMPONENTES', function () {
    
   
   
    
    
  return view ('blog.COMPONENTES');


}) ->name('COMPONENTES');

Route::get('/dedicados', function () {
    
   
   
    
    
  return view ('blog.dedicados');


}) ->name('dedicados');

Route::get('/DISPARADORES', function () {
    
   
   
    
    
  return view ('blog.DISPARADORES');


}) ->name('DISPARADORES');

Route::get('/FASES2', function () {
    
   
   
    
    
  return view ('blog.FASES2');


}) ->name('FASES2');

Route::get('/gt', function () {
    
   
   
    
    
  return view ('blog.gt');


}) ->name('gt');

Route::get('/LOGICAS', function () {
    
   
   
    
    
  return view ('blog.LOGICAS');


}) ->name('LOGICAS');

Route::get('/MCV', function () {
    
   
   
    
    
  return view ('blog.MCV');


}) ->name('MCV');


Route::get('/modelos', function () {
    
   
   
    
    
  return view ('blog.modelos');


}) ->name('modelos');

Route::get('/NIVELELS', function () {
    
   
   
    
    
  return view ('blog.NIVELELS');


}) ->name('NIVELELS');

Route::get('/NUBE', function () {
    
   
   
    
    
  return view ('blog.NUBE');


}) ->name('NUBE');

Route::get('/principal', function () {
    
   
   
    
    
  return view ('blog.principal');


}) ->name('principal');

Route::get('/PROGRAMA', function () {
    
   
   
    
    
  return view ('blog.PROGRAMA');


}) ->name('PROGRAMA');

Route::get('/PROTOCOLOS', function () {
    
   
   
    
    
  return view ('blog.PROTOCOLOS');


}) ->name('PROTOCOLOS');

Route::get('/red', function () {
    
   
   
    
    
  return view ('blog.red');


}) ->name('red');

Route::get('/redes', function () {
    
   
   
    
    
  return view ('blog.redes');


}) ->name('redes');

Route::get('/RG', function () {
    
   
   
    
    
  return view ('blog.RG');


}) ->name('RG');

Route::get('/TIPOSA', function () {
    
   
   
    
    
  return view ('blog.TIPOSA');


}) ->name('TIPOSA');

Route::get('/TIPOSS', function () {
    
   
   
    
    
  return view ('blog.TIPOSS');


}) ->name('TIPOSS');

Route::get('/transferencias', function () {
    
   
   
    
    
  return view ('blog.transferencias');


}) ->name('transferencias');

Route::get('/TURAS', function () {
    
   
   
    
    
  return view ('blog.TURAS');


}) ->name('TURAS');

Route::get('/CLIENTE', function () {
    
   
   
    
    
  return view ('blog.CLIENTE');


}) ->name('CLIENTE');

Route::get('/COMPUTADORAS', function () {
    
   
   
    
    
  return view ('blog.COMPUTADORAS');


}) ->name('COMPUTADORAS');

Route::get('/CONEXION', function () {
    
   
   
    
    
  return view ('blog.CONEXION');


}) ->name('CONEXION');

Route::get('/SOS', function () {
    
   
   
    
    
  return view ('blog.SOS');


}) ->name('SOS');
Route::get('/unidad2', function () {
    
   
   
    
    
  return view ('blog.unidad2');


}) ->name('unidad2');

Route::get('/unidad3 copy', function () {
    
   
   
    
    
  return view ('blog.unidad3 copy');


}) ->name('unidad3 copy');

Route::get('/generic', function () {
    
   
   
    
    
  return view ('blog.generic');


}) ->name('generic');

