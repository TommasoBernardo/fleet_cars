<?php
// definizione dell'interfaccia 
interface Vehicle
{
    // definizione dei metodi
    public function start();
    public function accelerate();
    public function stop();
    public function fuelConsumption();
}

abstract class Car implements Vehicle
{
    private $color = "";
    private $price = "";
    private $status = "";
    private $speed = "";

    // implementazione dei metodi
    public function start()
    {
        // corpo del Metodo
    }

    // implementazione dei metodi
    public function accelerate()
    {
        // corpo del Metodo
    }

    // implementazione dei metodi
    public function stop()
    {
        // corpo del Metodo
    }
}
