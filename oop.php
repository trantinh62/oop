<?php
class VanDongVien 
{
    public string $hoten;
    public int $tuoi;
    public string $monthidau;
    public float $cannang;
    public float $chieucao;
    function __construct($hoten, $tuoi, $monthidau, $cannang, $chieucao) {
        $this->hoten = $hoten;
        $this->tuoi = $tuoi;
        $this->monthidau = $monthidau;
        $this->cannang = $cannang;
        $this->chieucao = $chieucao;
    }
    public function get_all() {
        return 'Họ và tên: ' . $this->hoten . '<br> Tuồi: ' . $this->tuoi . '<br> Môn thi đấu: ' . $this->monthidau
        . ' <br> Cân nặng: ' . $this->cannang . '<br> Chiều cao' . $this->chieucao;
    }


    
}



$a = new VanDongVien("Trần a", 16, 'bóng đá', 71.5, 1.70);
$b = new VanDongVien("Trần b", 56, 'bóng đá', 71.5, 1.70);
$c = new VanDongVien("Trần c", 26, 'bóng đá', 71.5, 1.70);
$d = new VanDongVien("Trần d", 19, 'bóng đá', 71.5, 1.70);
$e = new VanDongVien("Trần e", 96, 'bóng đá', 71.5, 1.70);
// if ($a->tuoi >= 15 && $a->tuoi <= 30) {
//     echo $a->get_all() . '<br><br>';
// }

$mang = [$a, $b, $c, $d, $e];
function checkAge($arr) {
    foreach ($arr as $key => $value) {
        if ($value->tuoi >= 16 && $value->tuoi <= 30) {
            echo $value->get_all();
        }
    }
}

checkAge($mang);

$mang2 = [new VanDongVien("Trần a", 10, 'bóng đá', 71.5, 1.70),
    new VanDongVien("Trần c", 216, 'bóng đá', 71.5, 1.70),
    new VanDongVien("Trần a", 16, 'bóng đá', 71.5, 1.70),
    new VanDongVien("Trần c", 26, 'bóng đá', 71.5, 1.70),
    new VanDongVien("Trần a", 96, 'bóng đá', 71.5, 1.70)];
echo '<br><br><br><br><br>';
checkAge($mang2);

