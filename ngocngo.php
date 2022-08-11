<?php
namespace Vehicle;

abstract class Vehicle
{
    protected $name;
    protected $type;
    protected $wheel;
    protected $numberOfSeats;
    protected $isFull;
    protected $licensePlate;
    public function __construct($name, $type, $wheel, $numberOfSeats, $isFull, $licensePlate)
    {
        $this->name = $name;
        $this->type = $type;
        $this->wheel = $wheel;
        $this->numberOfSeats = $numberOfSeats;
        $this->isFull = $isFull;
        $this->licensePlate = $licensePlate;
    }
    abstract public function move();
    abstract public function hasDoor();
   
}
namespace Plane;
use Vehicle\Vehicle;

class Plane extends Vehicle
{
    public function move()
    {
        return [
            'type' => $this->type,
            'wheel' => $this->wheel,
            'numberOfSeats' => $this->numberOfSeats
        ];
    }

    public function hasDoor()
    {
        return true;
    }
  
}

class Car extends Vehicle
{

    public function move()
    {
        return [
            'type' => $this->type,
            'wheel' => $this->wheel,
            'numberOfSeats' => $this->numberOfSeats
        ];
    }

    public function hasDoor()
    {
        return true;
    }
    
}

namespace Moto;
use Vehicle\Vehicle;

class Moto extends Vehicle
{
    public function move()
    {
        return [
            'type' => $this->type,
            'wheel' => $this->wheel,
            'numberOfSeats' => $this->numberOfSeats
        ];
    }

    public function hasDoor()
    {
        return false;
    }
  
}


$moto = new Moto('name', 'type', 'wheel', 'numberOfSeats', 'isFull', 'licensePlate');
echo '<pre>';
var_dump($moto->move());
