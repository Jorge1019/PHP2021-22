<?php

class Persona
{

    // Atributos
    public $nombre;

    // con private no se puede enviar
    public $edad;

    private $nombre1;

    // con private no se puede enviar excepto con get y setter
    private $edad1;

    // Metodo constructores
    public function __construct($nombre = "Jaime", $edad = 12)
    {
        $this->nombre = $nombre;
    }

    // Metodo
    public function dimeNombre()
    {
        echo $this->nombre;
    }

    /**
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     *
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     *
     * @return mixed
     */
    public function getEdad1()
    {
        return $this->edad1;
    }

    /**
     *
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     *
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     *
     * @param mixed $nombre1
     */
    public function setNombre1($nombre1)
    {
        $this->nombre1 = $nombre1;
    }

    /**
     *
     * @param mixed $edad1
     */
    public function setEdad1($edad1)
    {
        $this->edad1 = $edad1;
    }

    public function getNombre1()
    {
        return $this->nombre1;
    }

    public function __toString()
    {
        return "{$this->nombre}({$this->edad})";
    }
}

?>