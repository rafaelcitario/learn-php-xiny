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
