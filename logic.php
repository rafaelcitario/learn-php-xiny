<?php
$a = 0;
$b = '0';
$c = '1';
$d = '1';


assert($a == $b);
assert($c != $a);
assert($c <> $a);
assert($a < $c);
assert($c > $b);
assert($a <= $b);
assert($c >= $d);

// strict compair. Like Js homies
assert($c === $d);
assert($a !== $d);
assert(1 === '1');
assert(1 !== '1');

// spaceship operator
$a = 1000;
$b = 10000;
echo $a <=> $a . PHP_EOL; // return 0 because no side are equals
echo $a <=> $b . PHP_EOL; // return -1 because the right side is greater
echo $b <=> $a . PHP_EOL; // return 1 because the left side is greater
