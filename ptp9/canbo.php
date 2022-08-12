<?php
class CanBo
{
    protected string $hoVaTen;
    protected int $tuoi;
    protected string $gioiTinh;
    protected string $diaChi;

    public function __construct($hoVaTen, $tuoi, $gioiTinh, $diaChi)
    {
        $this->hoVaTen = $hoVaTen;
        $this->tuoi = $tuoi;
        $this->gioiTinh = $gioiTinh;
        $this->diaChi = $diaChi;
    }

    public function run() {
        return 'Thông tin cán bộ. <br> ==================================================== <br> Họ và tên: ' .
        $this->hoVaTen . '<br> Tuổi: ' . $this->tuoi . '<br> giới tính: ' . $this->gioiTinh . '<br> Địa chỉ: ' . 
        $this->diaChi;
    }
}

class CongNhan extends CanBo
{
    protected int $capBac;

    public function __construct($hoVaTen, $tuoi, $gioiTinh, $diaChi, $capBac)
    {
        $this->capBac = $capBac;
        $this->hoVaTen = $hoVaTen;
        $this->tuoi = $tuoi;
        $this->gioiTinh = $gioiTinh;
        $this->diaChi = $diaChi;
        parent::__construct($hoVaTen, $tuoi, $gioiTinh, $diaChi);
    }

    public function run() {
        return parent::run() . '<br>Cấp bậc: ' . $this->capBac;
    }
}

class KySu extends CanBo
{
    protected string $nganhDaoTao;

    public function __construct($hoVaTen, $tuoi, $gioiTinh, $diaChi, $nganhDaoTao)
    {
        $this->nganhDaoTao = $nganhDaoTao;
        $this->hoVaTen = $hoVaTen;
        $this->tuoi = $tuoi;
        $this->gioiTinh = $gioiTinh;
        $this->diaChi = $diaChi;
        parent::__construct($hoVaTen, $tuoi, $gioiTinh, $diaChi);
    }
    public function run() {
        return parent::run() . '<br>Ngành đào tạo: ' . $this->nganhDaoTao;
    }
    
}
class NhanVien extends CanBo
{
    protected string $congviec;

    public function __construct($hoVaTen, $tuoi, $gioiTinh, $diaChi, $congviec)
    {
        $this->congviec = $congviec;
        $this->hoVaTen = $hoVaTen;
        $this->tuoi = $tuoi;
        $this->gioiTinh = $gioiTinh;
        $this->diaChi = $diaChi;
        parent::__construct($hoVaTen, $tuoi, $gioiTinh, $diaChi);
    }

    public function run() {
        return parent::run() . '<br>Công việc: ' . $this->congviec;
    }
}

$congnhan = new KySu('Nguyễn Văn A', 27, 'Nam', 'Đà Nẵng-Hội An', 'xây dựng');
echo $congnhan->run();

