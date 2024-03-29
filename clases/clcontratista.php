<?php


class Contratista extends Empleado
{
    private $totalHoras;
    private $valorHora;

    public function Contratista($identificacion, $nombre, $cargo)
    {
        parent::__construct($identificacion,$nombre,$cargo);
    }

    public function calcularSalario($totalHoras,$valorHora)
    {
        $this ->salario=$valorHora*$totalHoras;
    }

    public function getTotalHoras()
    {
    return $this->totalHoras;
    }
    public function getValorHora()
    {
    return $this->valorHora;
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
    public function setTotalHoras($newVal)
    {
    $this->TotalHoras = $newVal;
    }
    public function setValorHora($newVal)
    {
    $this->ValorHora = $newVal;
    }
}
