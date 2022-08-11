<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
class Product
{
    public string $name;
    public int $price;
    public int $quantity;
    public $active = 'active';
    public $created_at;
    public $updated_at;
    public $closed_at;
    function __construct($name, $price, $quantity, $active, $created_at, $updated_at, $closed_at ) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->active = $active;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->closed_at = $closed_at;
    }
    function __destruct() {

    }
    public function setUpdatedAt($update) {
        $this->updated_at = $update;
    }
    public function getUpdatedAt() {
        return $this->updated_at;
    }
    public function setcloseddAt($closed_at) {
        $this->closed_at = $closed_at;
    }
    public function getcloseddAt() {
        return $this->closed_at;
    }
    public function setTongGia($tongGia) {
        $this->closed_at = $tongGia;
    }

    public function getTongGia() { //Tổng
        return $this->formatMoney($this->quantity * $this->price) ;
    }

    protected function formatMoney($money) {
        return number_format($money) ;
    }
    public function getPrice() {
        return $this->formatMoney($this->price);
    }

    public function getTongSanPham($tong) {
        return $tong += $this->getTongGia();
    }
    public function getProduct() {
        return '<br> Tên sản phẩm: ' . $this->name . '<br> Giá sản phẩm: ' . $this->getPrice() . '<br> Số lượng: ' . $this->quantity .
         '<br>Trạng thái: ' . $this->active . '<br>thời gian: ' . $this->created_at .  '<br>thời gian updated: ' . $this->updated_at
         .  '<br>Tổng : ' . $this->getTongGia() . '<br><br><br>';
    }

}
//
$date = date('Y/m/d h:i:s ', time());
$a = new Product('sách', 20, 2, 'active', '2022/07/03 04:05:28', '2022/07/03 04:05:28', $date);
$b = new Product('sách', 10, 12, 'draff', '2022/07/16 04:05:28', null, $date);
$c = new Product('sách', 3, 12, 'active', '2022/07/31 04:05:28', null, null);
$d = new Product('sách', 4, 12, 'active', '2022/08/16 04:05:28', null, $date);
$e = new Product('sách', 5, 12, 'active', '2022/05/16 04:05:28', null, null);
$ee = new Product('ee', 5, 12, 'active', '2022/07/16 04:05:28', null, null);
$eee = new Product('eee', 5, 12, 'active', '2022/07/16 04:05:28', null, null);
$eeee = new Product('eeee', 5, 12, 'active', '2022/07/16 04:05:28', null, null);
$f = new Product('sách', 6, 12, 'active', $date, null, $date);
$g = new Product('s1111ách', 6, 12, 'active', $date, null, $date);
$arrProduct = [$a, $b, $c, $d, $e, $f];
$arrProduct[] = $ee;
array_push($arrProduct, $eee, $eeee);
function checkAge($s) {
    foreach ($s as $key => $value) {
        if ($value->closed_at != null && $value->active == 'active') {
            echo $value->getProduct();
        }
    }
}
function allTotal($s) {
    $tong = 0;
    foreach ($s as $key => $value) {
      $tong = $value->getTongSanPham($tong);
    }
    echo $tong;
}

$timestampJuly= strtotime('2022/07/01 00:00:00');
$timestampJulyEnd = strtotime('2022/07/31 23:59:59');
function getProductByTime($datTime, $startDate, $endDate) {
 
    foreach ($datTime as $key => $value) {
        $timeArr = strtotime($value->created_at);
        if ($timeArr >= $startDate && $timeArr <= $endDate && $value->closed_at == null && $value->active == 'active') {
            echo $value->getProduct();
        }
    }
}

function getDellDraff($daff) {
 
    foreach ($daff as $key => $value) {
        if ($value->active != 'active') {
            echo $value->getProduct();
        }
    }
}

// checkAge($arrProduct);
// allTotal($arrProduct);
echo '<br>';
getProductByTime($arrProduct, $timestampJuly, $timestampJulyEnd); 
// getDellDraff($arrProduct);
