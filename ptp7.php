<?php
// include 'fileb.php';
// class VeMayBay
// {
//     public string $tenChuyen;
//     public string $ngayBay;
//     public int $giaVe;
//     public function __construct($tenChuyen, $ngayBay, $giaVe) {
//         $this->tenChuyen = $tenChuyen;
//         $this->ngayBay = $ngayBay;
//         $this->giaVe = $giaVe;
//     }
//     function __destruct() {
//     }
//     public function getVeMayBay() {
//         return 'Tên chuyến bay: ' . $this->tenChuyen . '<br> Ngày bay: ' . $this->ngayBay . '<br> Ngày bày: ' . $this->giaVe;
//     }
// }
// class Nguoi
// {
//     public string $hoTen;
//     public string $gioiTinh;
//     public int $tuoi;
//     public function __construct($hoTen, $gioiTinh, $tuoi) {
//         $this->hoTen = $hoTen;
//         $this->gioiTinh = $gioiTinh;
//         $this->tuoi = $tuoi;
//     }
//     function __destruct() {
//     }
//     public function getNguoi() {
//         return 'Họ tên: ' . $this->hoTen . '<br> Giới tính: ' . $this->gioiTinh . '<br> Tuổi: ' . $this->tuoi;
//     }
// }
// class Hanhkhach 
// {
//     public $ve = [];
//     public int $soLuong;
//     public function __construct($ve, $soLuong) {
//         $this->ve = $ve;
//         $this->soLuong = $soLuong;
//     }
//     function __destruct() {
//     }

//     function conver() {
//         return join('-', $this->ve);
//     }
//     public function getHanhKhach() {
//         return 'Vé: ' . $this->conver() . '<br> Số lượng: ' . $this->soLuong;
//     }
//     public function tongTien() {
//         //
//     }
// }




    class c extends b {
        public $conChuot;
        public $conTieuCuong;
        public function __construct($conChuot, $conTieuCuong,$conTrau, $conCho, $conNghe, $conGa) {
            $this->conChuot = $conChuot;
            $this->conTieuCuong = $conTieuCuong;
            parent::__construct($conTrau, $conCho, $conNghe, $conGa);
        }
        public function message() {
            return parent::getA();
        }
        public function aa() {
            return  $this->conTieuCuong . 1111;
        }
    }
    $echo = new c('con chuột', 'con tiểu cường', 'con trâu', 'con chó', 'con nghé', 'con gà');
    echo $echo->thangchab();


