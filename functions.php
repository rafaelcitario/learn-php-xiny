<?php
function my_function() {
    return "Hello" . PHP_EOL;
}

echo my_function(); // Hello


// add
function add($x, $y = 1) {
    $result = $x + $y;
    return $result;
}

echo add(4); // 5 | if $y dont receit parameter this automatically receive the value 1
echo add(4, 2); // 6

// anonymous func 5.3php
$inc = function ($x) {
    return $x + 1;
}; // <= anonymous func need coma in the end brackets
echo $inc(2); // 3

// closures | callbacks
function foo($x, $y, $z): void {
    echo "$x - $y - $z";
}
function bar($x, $y): callable {
    return function ($z) use ($x, $y) {
        foo($x, $y, $z);
    };
}

$bar = bar("A", "B");
$bar("C");

// Test clousures
function getTotalItem($quantity, $product) {
    $total = 0.00;
    return function ($tax) use ($quantity, $product, $total) {
        $total = $quantity * $product;
        $tax   = $tax / 100;
        return $total += $tax * $quantity;
    };
}

$priceProductsWithoutTax   = getTotalItem(4, 2);
$applyTaxTotalProductPrice = &$priceProductsWithoutTax;
echo "\nThe real price of the product is: R$ {$applyTaxTotalProductPrice(5)}" . PHP_EOL;


// get all the parameter passed to a function
function parameters() {
    // if the number of args is equals 0 then get the arg at position 0 and concat a pipe '|'
    $numargs = func_num_args();
    if ($numargs > 0) {
        echo " =>\t";
    }

    // if the number args are greater 0 print all args enumerated and concatened a pipe '|'
    $args_array = func_get_args();
    foreach ($args_array as $key => $arg) {
        echo $key . ' - ' . $arg . ' | ';
    }
}
parameters('Hello', 'World'); // 0 - Hello | 1 - World |

// output separated args like the func above, but without number args
function variables($word, ...$args) {
    echo "\n" . $word . " || ";
    foreach ($args as $arg) {
        echo $arg . " | ";
    }
}
variables("Separate", "Hello", "World");
