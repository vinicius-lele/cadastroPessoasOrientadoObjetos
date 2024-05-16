<?php

$file = new SplFileObject('spl_file_object2.php');

while(!$file->eof())
{
    print 'linha: ' . $file->fgets() . '<br>';
}