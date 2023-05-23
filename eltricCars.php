<?php
abstract class ElectricCar
{
    public function powerConsumption()
    {
    }
    public function powerTofuel()
    {
        $power = 5;
        $fuel = 'n';

        $fuel = $power / 3;
    }
}
