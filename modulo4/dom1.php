<?php
$doc = new DOMDocument;
$doc->load('bases.xml');

$bases = $doc->getElementsByTagName('base');

foreach($bases as $base)
{
    print 'ID: '. $base->getAttribute('id') . '<br>';
    $names = $base->getElementsByTagName('name');
    $hosts = $base->getElementsByTagName('host');
    $types = $base->getElementsByTagName('type');
    $users = $base->getElementsByTagName('user');

    print 'Name: ' . $names->item(0)->nodeValue . '<br>';
    print 'Host: ' . $hosts->item(0)->nodeValue . '<br>';
    print 'Type: ' . $types->item(0)->nodeValue . '<br>';
    print 'User: ' . $users->item(0)->nodeValue . '<br>';
}