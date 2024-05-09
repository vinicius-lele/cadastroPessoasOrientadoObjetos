<?php
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->formatOutput = true;

$bases = $dom->createElement('bases');
$base = $dom->createElement('base');
$bases->appendChild($base);

$atr = $dom->createAttribute('id');
$atr->value = '1';
$base->appendChild($atr);

$base->appendChild($dom->createElement('nome','teste'));
$base->appendChild($dom->createElement('host','192.168.0.1'));
$base->appendChild($dom->createElement('type','mysql'));
$base->appendChild($dom->createElement('user','adm'));

print $dom->saveXML($bases);
file_put_contents('testezinho.xml',$bases);