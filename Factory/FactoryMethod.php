<?php

abstract class VehicleFactoryMethod
{
    abstract public function make($brand);
}

class CarFactory extends VehicleFactoryMethod
{
    public function make($brand)
    {
        $car = null;
        switch ($brand) {
            case "mercedes":
                $car = new MercedesCar;
                break;
            case "toyota":
                $car = new ToyotaCar;
                break;
        }

        return $car;
    }
}

class BikeFactory extends VehicleFactoryMethod
{
    public function make($brand)
    {
        $car = null;
        switch ($brand) {
            case "yamaha":
                $car = new YamahaBike;
                break;
            case "ducati":
                $car = new DucatiBike;
                break;
        }

        return $car;
    }
}

interface CarInterface
{

    public function design();

    public function assemble();

    public function paint();

}
interface BikeInterface
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

    public function paint()
    {
        return 'Assembling Mercedes Car';
    }

    public function assemble()
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

    public function paint()
    {
        return 'Assembling Toyota Car';
    }

    public function assemble()
    {
        return 'Painting Toyota Car';
    }

}

class YamahaBike implements BikeInterface
{

    public function design()
    {
        return 'Designing Yamaha Bike';
    }

    public function paint()
    {
        return 'Assembling Yamaha Bike';
    }

    public function assemble()
    {
        return 'Painting Yamaha Bike';
    }

}

class DucatiBike implements BikeInterface
{

    public function design()
    {
        return 'Designing Ducati Bike';
    }

    public function paint()
    {
        return 'Assembling Ducati Bike';
    }

    public function assemble()
    {
        return 'Painting Ducati Bike';
    }

}

$carFactoryInstance = new CarFactory;
$mercedes = $carFactoryInstance->make('mercedes');
echo $mercedes->design()."\n";
echo $mercedes->assemble()."\n";
echo $mercedes->paint()."\n\n";

$toyota = $carFactoryInstance->make('toyota');
echo $toyota->design()."\n";
echo $toyota->assemble()."\n";
echo $toyota->paint()."\n\n";

$bikeFactoryInstance = new BikeFactory;
$yamaha = $bikeFactoryInstance->make('yamaha');
echo $yamaha->design()."\n";
echo $yamaha->assemble()."\n";
echo $yamaha->paint()."\n\n";

$ducati = $bikeFactoryInstance->make('ducati');
echo $ducati->design()."\n";
echo $ducati->assemble()."\n";
echo $ducati->paint()."\n\n";

