<?php

class CarFactory
{
    protected $brands = [];

    public function __construct()
    {
        $this->brands = [
            'mercedes' => 'MercedesCar',
            'toyota' => 'ToyotaCar'
        ];
    }

    public function make($brand)
    {
        if(!array_key_exists($brand, $this->brands)) {
            return new Exception('car is not available');
        }

        $className = $this->brands[$brand];

        return new $className;
    }

}

interface CarInterface
{
    public function design();
    public function assemble();
    public function paint();
}

class MercedesCar implements CarInterface
{
    public function design()
    {
        return 'Designing Mercedes Car';
    }

    public function assemble()
    {
        return 'Assembling Mercedes Car';
    }

    public function paint()
    {
        return 'Painting Mercedes Car';
    }
}

class ToyotaCar implements CarInterface
{
    public function design()
    {
        return 'Designing Toyota Car';
    }

    public function assemble()
    {
        return 'Assembling Toyota Car';
    }

    public function paint()
    {
        return 'Painting Toyota Car';
    }
}

$carFactory = new CarFactory();

$mercedes = $carFactory->make('mercedes');
echo $mercedes->design()."\n";
echo $mercedes->assemble()."\n";
echo $mercedes->paint()."\n";

$toyota = $carFactory->make('toyota');
echo $toyota->design()."\n";
echo $toyota->assemble()."\n";
echo $toyota->paint()."\n";
