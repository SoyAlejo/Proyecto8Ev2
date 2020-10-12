<?php
class Empleado
{
    protected $cargo;
    protected $identificacion;
    protected $nombre;
    protected $salario;

    public function Empleado($identificacion, $nombre, $salario, $cargo)
    {
        $this->identificacion = $identificacion;
        $this->identificacion = $nombre;
        $this->identificacion = $cargo;
    }
    public function getCargo()
    {
        return $this->cargo;
    }
    public function getIdentificacion()
    {
        return $this->identificacion;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getSalario()
    {
        return $this->salario;
    }
    protected function setCargo($newVal)
    {
        $this->cargo = $newVal;
    }
    protected function setIdentificacion($newVal)
    {
        $this->identificacion = $newVal;
    }
    protected function setNombre($newVal)
    {
        $this->nombre = $newVal;
    }
    protected function setSalario($newVal)
    {
        $this->salario = $newVal;
    }
}
