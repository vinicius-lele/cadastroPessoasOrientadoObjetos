<?php
$ingredientes = new SplQueue();

$ingredientes->enqueue('Peixe');
$ingredientes->enqueue('Sal');
$ingredientes->enqueue('Limão');

print $ingredientes->count();
print $ingredientes->dequeue();