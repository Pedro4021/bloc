<?php

namespace App\Models;

class informacion{

    public $nombre;
    Public $apellido_paterno;
    Public $apellido_materno;
    public $edad;
    Public $correo;
    public $matricula;
    Public $grupo;
    Public $carrera;
    Public $cuatrimestre;
    Public $turno;
    


    Public Function mostrarinformacion(){
        echo $this -> nombre;
        echo $this -> apellido_paterno;
        echo $this-> apellido_materno;
        echo $this -> edad;
        echo $this -> correo;

    }
    Public Function mostrarinformacionescolar(){
        echo $this -> nombre;
        echo $this -> apellido_paterno;
        echo $this-> apellido_materno;
        echo $this -> matricula;
        echo $this -> grupo;
        echo $this -> carrera;
        echo $this -> cuatrimestre;
        echo $this-> turno;
        echo $this -> correo;
        

    }
    
    
}
