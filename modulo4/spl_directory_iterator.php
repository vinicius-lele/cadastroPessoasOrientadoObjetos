<?php

foreach (new DirectoryIterator('C:\xampp\htdocs\cadastroPessoasOrientadoObjetos\modulo4') as $file)
{
    print 'Nome ~> ' . $file->getFileName() . '<br>';
    print 'Extensão ~> ' . $file->getExtension() . '<br>';
    print 'Tamanho ~> ' . $file->getSize() . '<br>';
    print '<hr>';
}