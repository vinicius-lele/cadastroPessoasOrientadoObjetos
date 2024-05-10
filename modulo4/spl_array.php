<?php

$dados = ['salmão', 'tilápia', 'sardinha', 'badejo', 'pescada', 'dourado', 'corvina', 'cavala', 'bagre'];
$obArray = new ArrayObject($dados);

$obArray->append('bacalhau');

print $obArray->offsetGet(2).'<br>';
$obArray->offsetSet(2, 'linguado');

$obArray->offsetUnset(4);
print $obArray->count();

print $obArray->offsetExists(10)?'Existe':'Inexistente';

$obArray[] = 'atum';

$obArray->natsort();

foreach($obArray as $item)
{
    print '->'.$item;
}

print $obArray->serialize();