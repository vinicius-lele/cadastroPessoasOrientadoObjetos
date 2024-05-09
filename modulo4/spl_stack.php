<?php
$ingredientes = new SplStack;
$ingredientes->push('peixe');
$ingredientes->push('sal');
$ingredientes->push('limão');

print $ingredientes->count();
print $ingredientes->pop();