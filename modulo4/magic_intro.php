<?php

class Titulo
{
    private $dt_vencimento;
    private $valor;

    public function __construct($dt_vencimento, $valor)
    {
        $this->dt_vencimento = $dt_vencimento;
        $this->valor = $valor;
        print "construtor funcionando";
    }
    public function setValor($valor)
    {}
    public function __destruct()
    {
        print 'destrutor';
    }
}
$tit = new Titulo('2024-07-23', 100);
$tit->setValor(100);