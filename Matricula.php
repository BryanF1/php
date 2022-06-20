<?php

namespace App\View;

class Cliente
{
    private $fechaDeMatricula;

    private $añoDeMatricula;

    private $costo

    private $estudiante; 

    private $curso; 

    public function __construct($fechaDeMatricula, $añoDeMatricula, $costo, $estudiante, $curso)
    {
        $this->fecha = $fechaDeMatricula;
        $this->año = $añoDeMatricula;
        $this->costo = $costo;
        $this->Estudiante = $estudiante;
        $this->Curso = $curso;
    }
}