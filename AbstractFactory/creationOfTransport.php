<?php


abstract class creationOfTransport implements TransportFactory
{
    public function createCars(): AbstractCars
    {
        return new makingCars;
    }

    public function createBicycles(): AbstractBicycles
    {
        return new makingBicycles;

    }

    public function createMotorcycles(): AbstractMotorcycles
    {
        return new maringMotorcycles;

    }

    public function createTrucks(): AbstractTrucks
    {
        return new makingTrucks;
    }

}