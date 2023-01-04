<?php

namespace App\DesignPatterns\Decorator;

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 25;
    }

    public function getDescription()
    {
       return 'Basic Inspection';
    }
}
