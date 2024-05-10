<?php
$path = 'C:\xampp\htdocs\cadastroPessoasOrientadoObjetos';
foreach (new RecursiveIteratorIterator ( 
    new RecursiveDirectoryIterator(
        $path, RecursiveDirectoryIterator::SKIP_DOTS)) 
        as $item)
{
    print (string) $item . '<br>';
}