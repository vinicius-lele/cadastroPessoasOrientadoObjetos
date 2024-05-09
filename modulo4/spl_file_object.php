<?php

$file = new SplFileObject('spl_file_object.php');
print $file->getFileName();
print $file->getSize();
print $file->getType();

$file2 = new SplFileObject('novo.txt', 'w');
$bytes = $file2->fwrite('Olá Mundo PHP');

print $bytes;
