<?php


interface TransportFactory
{
    public function createCars(): AbstractCars;

    public function createBicycles(): AbstractBicycles;

    public function createMotorcycles(): AbstractMotorcycles;

    public function createTrucks(): AbstractTrucks;
}