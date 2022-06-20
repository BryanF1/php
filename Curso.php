<?php

namespace App\View;

class Curso
{
    private $nombreDeCurso;

    private $gradoDelCurso;

    public function __construct($nombresDeCurso, $gradoDelCurso)
    {
        $this->nombres = $nombresDeCurso;

        $this->grado = $gradoDelCurso;
    }
    public function getNombres()
    {
        return $this->nombres;
    }

    public function getgrado()
    {
        return $this->grado;
    }
}
