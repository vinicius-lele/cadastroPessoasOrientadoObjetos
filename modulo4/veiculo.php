<?php
class Veiculo
{
    protected $ano;
    protected $marca;
    protected $cor;
    protected $parts;

    public function getParts() {}
    public function setMarca($marca) {}
    
}

class Automovel extends Veiculo{
    private $placa;
    const RODAS=4;
    public function setPlaca($placa){}
    public function getPlaca() {}
}