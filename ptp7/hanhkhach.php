<?php
include 'nguoi.php';
class Hanhkhach extends Nguoi
{
    private $ticket = [];
    public int $quantity;

    public function __construct($ticket, $quantity, $hoTen, $gioiTinh, $tuoi) {
        $this->ticket = $ticket;
        $this->quantity = $quantity;
        parent::__construct($hoTen, $gioiTinh, $tuoi);
    }
    function __destruct() {
    }

    function conver() {
        return join('-', $this->ticket);
    }
    public function getVe() {
        return 'Vé: ' . $this->conver();
    }
    public function getNguoi1() {
        return 'Vé: ' . $this->conver();
    }
    public function getQuantity() {
        return 'Vé: ' . $this->quantity;
    }
    public function totalMoney() {
        $total = '';
        foreach($this->ticket as $key => $value) {
            $total =  $value->getDemo();
        }
        return $total;
    }

    public function hienthidanhsach() {
        echo $this->getNguoi();
        echo '<br>';
        echo $this->getQuantity();
        echo '<br>';
        foreach($this->ticket as $key => $value) {
            echo $value->getTenChuyen();
            echo '<br>';
            echo $value->getNgayBay();
            echo '<br>';
            echo $value->getGiaVe();
            echo '<br>===================================<br>';
        }
    }

}
// $object = new Hanhkhach([$vietnam], 2, 'Nguyễn Văn A', 'Nam', 20);

$arr = [
    new Hanhkhach([$vietnam], 2, 'Nguyễn Văn A', 'Nam', 20),
    new Hanhkhach([$asiana], 2, 'Nguyễn Văn A', 'Nam', 20),
    new Hanhkhach([$vietnam], 2, 'Nguyễn Văn A', 'Nam', 20),

];
foreach ($arr as $value) {
    $value->hienthidanhsach();
}

function total($total) {
    $tong = 0;
    foreach ($total as $key => $value) {
        $tong += $value->totalMoney();
    }
    echo number_format($tong);
}
echo 'Giá tổng vé đã mua: ';
total($arr);
