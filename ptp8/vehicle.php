<?php
namespace ptp8;
class Vehicle // phương tiện ( cha )
{
    protected string $nameVehicle;
    protected string $companyVehicle;
    protected string $numberOfSeats;
    protected string $colorVehicle;

    public function __construct($nameVehicle, $companyVehicle, $numberOfSeats, $colorVehicle)
    {
        $this->nameVehicle = $nameVehicle;
        $this->companyVehicle = $companyVehicle;
        $this->numberOfSeats = $numberOfSeats;
        $this->colorVehicle = $colorVehicle;
    }
}

class Car extends Vehicle // xe con của cha
{
    protected string $propertiesTraffic;

    public function __construct($propertiesTraffic, $nameVehicle, $companyVehicle, $numberOfSeats, $colorVehicle)
    {
        $this->propertiesTraffic = $propertiesTraffic;
        parent::__construct($nameVehicle, $companyVehicle, $numberOfSeats, $colorVehicle);
    }
    public function run() {
        return 'Lộ trình:' . $this->propertiesTraffic  . '<br> Tên xe: ' . $this->nameVehicle . '<br> Hãng xe: ' . $this->companyVehicle . '<br> Số ghế ngồi:' .$this->numberOfSeats
        . '<br> Màu xe: ' . $this->colorVehicle;
    }

}
$oto = new Car('đường bộ', 'CRV', 'Honda', 7, 'đỏ');

class Journeys
{
    protected $vehicleJourneys= [];
    protected string $tourJourneys;
    protected int $tourPrice;

    public function __construct($vehicleJourneys, $tourJourneys, $tourPrice)
    {
        $this->vehicleJourneys = $vehicleJourneys;
        $this->tourJourneys = $tourJourneys;
        $this->tourPrice = $tourPrice;

    }
    public function getTour() {
        return 'chuyến đi đu lịch: ' . $this->tourJourneys . '<br> Giá tour:' . $this->tourPrice;
    }
    public function hienthidanhsach() {
        echo $this->getTour();
        echo '<br>';
        foreach($this->vehicleJourneys as $key => $value) {
            echo $value->run();
        }
    }
}
$object = new Journeys([$oto], 'đà nẵng - khánh hòa', 50000);

echo $object->hienthidanhsach();