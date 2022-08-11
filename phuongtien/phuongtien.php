<?php
namespace phuongtien;
class Vehicle // 2 loại
{
    protected $speed; // tốc độ
    protected $wheel;   //bánh
    protected  $weight; // trọng lượng
    protected  $seat;
    protected  $color;

    public function __construct($speed, $wheel, $weight, $seat, $color) {
        $this->speed = $speed;
        $this->seat = $seat;
        $this->wheel = $wheel;
        $this->weight = $weight;
        $this->color = $color;
    }
}
class MotorVehicle extends Vehicle // xe cơ giới
{
    protected string $dongCo;
    protected string $nhienLieu;

    public function __construct($dongCo, $nhienLieu, $speed, $wheel, $weight, $seat, $color)
    {
        $this->dongCo = $dongCo;
        $this->nhienLieu = $nhienLieu;
        parent::__construct($speed, $wheel, $weight, $seat, $color);
    }    
}
class RudimentaryVehicles extends Vehicle //xe thô sơ
{
    protected string $info;

    public function __construct($info, $speed, $wheel, $weight, $seat, $color)
    {
        $this->info = $info;
        parent::__construct($speed, $wheel, $weight, $seat, $color);
        
    }
}

class Car extends MotorVehicle
{
    protected string $name;
    protected string $company;

    public function __construct($name, $company, $dongCo, $nhienLieu, $speed, $wheel, $weight, $seat, $color)
    {
        $this->name = $name;
        $this->company = $company;
        parent::__construct($dongCo, $nhienLieu, $speed, $wheel, $weight, $seat, $color);
    }

    public function run() {
        return 'tên xe:' . $this->name . '<br> hãng xe:' . $this->company . '<br> Động cơ:' . $this->dongCo
        . '<br> Nhiên liệu: ' . $this->nhienLieu . '<br> Tốc độ: ' . $this->speed . '<br> Số bánh xe:' .$this->wheel
        . '<br> Trọng lượng: ' . $this->weight . '<br> Số chổ ngồi: ' . $this->seat . '<br> màu xe: ' . $this->color;
    }
}
class Cyclo  extends RudimentaryVehicles
{
    protected string $ten; //không tìm được thuộc tính khác nên ví dụ tên và name như 2 thuộc tính khác nhau
    public function __construct($ten , $info, $speed, $wheel, $weight, $seat, $color)
    {
        $this->ten = $ten;
        parent::__construct($info, $speed, $wheel, $weight, $seat, $color);
    }

    public function run() {
        return 'tên xe:' . $this->ten  . '<br> thông tin: ' . $this->info . '<br> Tốc độ: ' . $this->speed . '<br> Số bánh xe:' .$this->wheel
        . '<br> Trọng lượng: ' . $this->weight . '<br> Số chổ ngồi: ' . $this->seat . '<br> màu xe: ' . $this->color;
    }
}

//ví dụ

$ojbCar = new Car('CRV', 'Honda', '4 thì', 'xăng', '200km/h', 4, 500, 5, 'đỏ');
$ojbXichlo = new Cyclo('xích lô', 'xe thô sơ', '200km/h', 3, '80 kg', 3, 'xanh lá');


echo $ojbXichlo->run();