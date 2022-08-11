<?php
namespace phuongtiendel;
class Vehicle
{
    private string $name;
    private int $fuelCapacity;
    private int $wheel;
    private int $numberOfSeats;
    private string $licensePlate;
    private string $color;
    private string $motive;
    private int $weight;
    private string $ratingFuelConsumption;
    private $interiorMirror = false;
    private $windshield = false;



    public function __construct($name, $fuelCapacity, $weight, $wheel, $numberOfSeats, $licensePlate, $color,
     $motive, $ratingFuelConsumption, $interiorMirror, $windshield)
    {
        $this->name = $name;
        $this->fuelCapacity = $fuelCapacity;
        $this->wheel = $wheel;
        $this->numberOfSeats = $numberOfSeats;
        $this->licensePlate = $licensePlate;
        $this->color = $color;
        $this->motive = $motive;
        $this->weight = $weight;
        $this->ratingFuelConsumption = $ratingFuelConsumption;
        $this->interiorMirror = $interiorMirror;
        $this->windshield = $windshield;
    }

    public function runVehicle() {
        return 'tên xe: ' . $this->name . '<br> dung tích nhiên liệu: ' . $this->fuelCapacity . '<br> động cơ: '
         . $this->motive . '<br> số bánh xe: ' . $this->wheel . '<br> số chổ ngồi: ' . 
        $this->numberOfSeats . '<br> biển số xe: ' . $this->licensePlate . '<br> màu sắc: ' . $this->color . '<br> gương nội thất:' . $this->interiorMirror
        . '<br> mức nhiên liệu tiêu thụ:' . $this->ratingFuelConsumption . '<br> kính chắn gió:' . $this->windshield . '<br> trọng lượng:' . $this->weight
        . '<br> động cơ: ' . $this->motive;
    }
}
class Car extends Vehicle
{
    private string $steeringWheel;
    private string $sunroof;
    protected function setSteeringWheel($steeringWheel) {
        $this->steeringWheel = $steeringWheel;
    }
    protected function getSteeringWheel() {
       return   $this->steeringWheel;
    }

    protected function setSunroof($sunroof) {
        $this->sunroof = $sunroof; 
    }
    
    public function getSunroof() {
        return $this->sunroof;
    }

    public function runVehicle() {
     return parent::runVehicle();
   }
}
class MoTo extends Vehicle
{
    // private string $?
    public function runVehicle() {
    return parent::runVehicle();
    }
}
class Bicycle extends Vehicle
{   public function runVehicle() {
    return parent::runVehicle();
    }
    
}
class Cyclo extends Vehicle
{
    public function runVehicle() {
    return parent::runVehicle();
    }
}

$ojb = new Car('Honda',900, '4 thì', 4, 7, '92D1 121111','Đỏ');

echo $ojb->runVehicle();