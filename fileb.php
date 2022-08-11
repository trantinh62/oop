<?php
include 'filea.php';
class b extends a {
    public $conTrau;
    public $conCho;
    public function __construct($conTrau, $conCho, $conNghe, $conGa) {
        $this->conTrau = $conTrau;
        $this->conCho = $conCho;
        
        parent::__construct($conNghe, $conGa);

    }
    public function getB () {
        return 'getb ' . $this->conTrau;
    }
    public function message() {
        echo "ngầu rồi " . parent::getA() . ' c ' . $this->conTrau;
    }
    public function noiDung() {
        echo parent::getA();
    }
    public function thangchab() {
        echo $this->conChuot;
    }
    
}