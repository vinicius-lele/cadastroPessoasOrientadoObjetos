<?php

$file = new SplFileObject('arquivo.txt');

foreach($file as $linha => $conteudo)
{
    print "$linha ~> $conteudo<br>";
}