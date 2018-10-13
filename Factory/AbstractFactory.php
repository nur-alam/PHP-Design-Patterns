<?php

abstract class AbstractVehicleFactory
{
    abstract public function makeCar();
    abstract public function makeBike();
}

class BangladeshiFactory extends AbstractVehicleFactory
{
    public function makeCar()
    {
        return new ToyotaCar();
    }

    public function makeBike()
    {
        return new YamahaBike();
    }
}

class UsaFactory extends AbstractVehicleFactory
{
    public function makeCar()
    {
        return new MercedesCar();
    }

    public function makeBike()
    {
        return new DucatiBike();
    }
}

abstract class AbstractVehicle
{
    abstract public function design();
    abstract public function assemble();
    abstract public function paint();
}

class MercedesCar extends AbstractVehicle
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

class ToyotaCar extends AbstractVehicle
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

class YamahaBike extends AbstractVehicle
{
    public function design()
    {
        return 'Designing Yamaha Bike';
    }

    public function assemble()
    {
        return 'Assembling Yamaha Bike';
    }

    public function paint()
    {
        return 'Painting Yamaha Bike';
    }
}

class DucatiBike extends AbstractVehicle
{
    public function design()
    {
        return 'Designing Ducati Bike';
    }

    public function assemble()
    {
        return 'Assembling Ducati Bike';
    }

    public function paint()
    {
        return 'Painting Ducati Bike';
    }
}

$bangladeshiFactoryInstance = new BangladeshiFactory;
$car = $bangladeshiFactoryInstance->makeCar();
echo $car->design()."\n";
echo $car->assemble()."\n";
echo $car->paint()."\n\n";
$bike = $bangladeshiFactoryInstance->makeBike();
echo $bike->design()."\n";
echo $bike->assemble()."\n";
echo $bike->paint()."\n\n";


$usaFactoryInsance = new UsaFactory;
$car = $usaFactoryInsance->makeCar();
echo $car->design()."\n";
echo $car->assemble()."\n";
echo $car->paint()."\n\n";
$bike = $usaFactoryInsance->makeBike();
echo $bike->design()."\n";
echo $bike->assemble()."\n";
echo $bike->paint()."\n\n";

