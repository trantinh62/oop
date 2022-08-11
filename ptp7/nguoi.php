<?php
include 'vemaybay.php';
class Nguoi extends VeMayBay
{
    private string $hoTen;
    private string $gioiTinh;
    private int $tuoi;
    public function __construct($hoTen, $gioiTinh, $tuoi) {
        $this->hoTen = $hoTen;
        $this->gioiTinh = $gioiTinh;
        $this->tuoi = $tuoi;
    }
    function __destruct() {
    }
    public function getNguoi() {
        return 'Họ tên: ' . $this->hoTen . '<br> Giới tính: ' . $this->gioiTinh . '<br> Tuổi: ' . $this->tuoi;
    }
}

// $nguoiA = new Nguoi('Nguyễn Văn A', 'Nam', 20);
// $nguoiB = new Nguoi('Nguyễn Văn B', 'Nam', 20);
// $nguoiC= new Nguoi('Nguyễn Văn C', 'Nam', 20);
// $nguoiD = new Nguoi('Nguyễn Văn D', 'Nam', 20);
// $nguoiE = new Nguoi('Nguyễn Văn E', 'Nam', 20);
// $nguoiF = new Nguoi('Nguyễn Văn F', 'Nam', 20);
// $nguoiG = new Nguoi('Nguyễn Văn G', 'Nam', 20);
// $nguoiH = new Nguoi('Nguyễn Văn H', 'Nam', 20);
// $nguoiI = new Nguoi('Nguyễn Văn I', 'Nam', 20);
// $nguoiJ = new Nguoi('Nguyễn Văn J', 'Nam', 20);

// $arrNguoi = [$nguoiA, $nguoiB, $nguoiC, $nguoiD, $nguoiE,$nguoiF, $nguoiG, $nguoiH, $nguoiI, $nguoiJ];
// echo '<pre>';
// var_dump($nguoiD);
