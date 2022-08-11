<?php 
 class a {
    public $conNghe;
    public $conGa;
    public function __construct($conNghe, $conGa) {
        $this->conNghe = $conNghe;
        $this->conGa = $conGa;
    }
    public function getA () {
        return 'getA ' . $this->conGa;
    }
    
    public function intro() {
        return $this->conNghe . ' ' .  $this->conGa;
    }
}