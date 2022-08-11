<?php
class VeMayBay
{
    private string $tenChuyen;
    private string $ngayBay;
    protected int $giaVe;
    public function __construct($tenChuyen, $ngayBay, $giaVe) {
        $this->tenChuyen = $tenChuyen;
        $this->ngayBay = $ngayBay;
        $this->giaVe = $giaVe;
    }

    function __destruct() {
    }

    public function getTenChuyen() {
        return 'Tên chuyến bay: ' . $this->tenChuyen;
    }

    public function getNgayBay() {
        return 'ngày bay:' . $this->ngayBay;
    }

    public function formatMoney($money) {
        return number_format($money) ;
    }

    public function getGiaVe() {
        return 'giá vé:' . $this->formatMoney($this->giaVe );
    }

    public function getDemo() {
        return $this->giaVe;
    }
}
$vietnam = new VeMayBay('Vietnam Airlines, China Southern, Hainan', 'Th 7, 20 thg 8', 20000);
$asiana = new VeMayBay('Asiana, Korean Air, China Southern, Hainan', 'Th 7, 20 thg 8', 30000);
$philippine = new VeMayBay('Vietnam Airlines, Philippine Airlines, China Southern, Hainan', 'Th 7, 20 thg 8', 15000);
$arrVeMayBay = [$vietnam, $asiana, $philippine];