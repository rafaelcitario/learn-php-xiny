<?php
$string = '$strinaaaaag';
// use echo or print to output a message
print("Hello ");
echo "Hello";
print("Hello\n");
echo "Hello\n";
print("Hello" . PHP_EOL);
echo "Hello" . PHP_EOL;

var_dump($string); // print type and values
print_r(
    [
        'One' => 'Segunda',
        'Two' => 'Terca',
        'Three' => 'Quarta',
        'Four' => 'Quinta',
        'Five' => 'Sexta'
    ]
);

// print and echo are language contructs, then you can drop the parentheses
print "Hello World!";
echo "Hello World!";

echo PHP_EOL;
echo 100;

echo "\n";
// short echo syntax
echo "<p>$string</p>";
