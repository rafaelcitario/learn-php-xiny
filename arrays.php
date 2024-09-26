<?php
$associative  = array('one' => 1, 'two' => 2, 'three' => 3);
$associative2 = ['One' => 1, 'Two' => 2, 'Three' => 3]; // 5.2php new sintax
print($associative2['One']);
$associative2['Four'] = 4; // add a new element to array
echo $associative2['Four'];

$arr = ['One', 'Two', 'Three'];
echo $arr[0];

$associative2[] = 'Five'; // add new element to end array
array_push($associative2, 'Six');
echo $associative2[3]; // TODO study about this methood to add element in array
unset($associative2['Four']);
print_r($associative2);
