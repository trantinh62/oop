<?php
class Vehicle
{
    private $duongHangKhong = 'đường hàng không';
    private $duongBo = 'đường bộ';

    protected function getDuongHangKhong() {
        return $this->duongHangKhong;
    }

    protected function getDuongBo() {
        return $this->duongBo;
    }
}

class Plane extends Vehicle
{
    private $canh = 'cánh';
    private $banh = '3 bánh';
    private $canhQuat = '2 động cơ cánh quạt';

    public function getPlane() {
        return  $this->canh . $this->banh . $this->canhQuat . $this->getDuongHangKhong();
    }
}

class Car extends Vehicle
{
    private $banh = '4 bánh';

    public function getCar() {
        return $this->banh . $this->getDuongBo();
    }
}
class Moto extends Vehicle
{
    private $banh = '2 bánh';

    public function getMoto() {
        return $this->banh . $this->getDuongBo();
    }
}

$get = new Moto();
echo $get->getMoto();
