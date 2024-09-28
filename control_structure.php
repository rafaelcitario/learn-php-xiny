<?php
$status = FALSE;

if ($status) {
    print "I get printed\n";
}


if (!$status) {
    print "I dont\n";
} else {
    print "I get printed\n";
}

if (!$status) {
    print "Does not get printed\n";
} elseif ($status) {
    print "Does\n";
}

// ternary
print(!$status ? "Does not get printed\n" : "I get printed\n");

// ternary shortcut
$x = FALSE;
print($x ?: "Does\n");

// coalesense
$a = NULL;
$b = "Does not print\n";
echo $a ?? 'a is not set' . PHP_EOL;
echo $b ?? 'b is not set' . PHP_EOL; // if null return this, if not return variable or expression

// Alternative syntax to use in templates
?>
<?php if ($x): ?>
    <p>aosdkaoskdas</p>
<?php else:  ?>
    <h1>aoskdaoskd</h1>
<?php endif ?>

<?php
switch ($x) {
    case '0':
        print "Switch does type coercion";
        break;
    case 'Two':
    case 'Three':
        break;
    default:
}



// loop
$i = 0;
while ($i < 5) {
    echo $i++; // incremente after evaluate
}

echo "\n";

$i = 0;
do {
    echo $i++; // incremente after evaluation
} while ($i < 5);

// loop for
for ($x = 0; $x < 10; $x++) {
    echo $x;
} // this prints 0123456789

echo PHP_EOL;

$wheels = ['bicycle' => 2, 'Car' => 4];

// that's different of python the variable comes before of a unit variable.
foreach ($wheels as $wheel_count) {
    echo $wheel_count . PHP_EOL;

    /**
     * prints:
     * 2
     * 4
     */
}

// this returns $vehicle like a key, $wheel_count like a value
foreach ($wheels as $vehicle => $wheel_count) {
    echo "a $vehicle has $wheel_count wheels";
}

$i = 0;
while ($i < 5) {
    // break on 3
    if ($i === 3) {
        break;
    }

    echo $i++ . PHP_EOL; // this return 012
    // if i wanna print 12 and ignore the 0
    // i can increment beferoe valuation ++$i
}

for ($i = 0; $i < 5; $i++) {
    if ($i === 3) {
        continue;
        /**
         * the continue propertie jumps in case $i equals 3
         */
    }
    echo $i; // prints 0124
}
