<?php

namespace App\View;

class Cliente
{
    private $nombre;

    private $edad;

    private $sexo;

    private $dni;
    public function __construct($nombre, $dni, $sexo, $edad)
    {
        $this->nombre = $nombre;

        $this->dni = $dni;

        $this->edad = $edad;

        $this->sexo = $sexo;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEdad()
    {
        return $this->edad;
    }
    public function getDni()
    {
        return $this->dni;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
}
