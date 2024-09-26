<?php
$sql_quotes = '$string'; // '$string'
$dbl_quotes = "This is a $sql_quotes"; // use double quotes, is possible call $strings inside.
$escaped    = "This contains a \t tab character";
$unescaped  = 'This just contains a slash an a t: \t';

$number     = 23;
$apples     = "I have {$number} apples to eat";
// $oranges    = "I have ${number} oranges to eat"; // is deprecated 8.2php
// $money      = "I have $${number} in the bank"; // ${} is deprecated 8.2php
$newMoney   = "I have $$number in the bank"; // same result of the above line but non deprecated

$nowdoc = <<<'EOD'
Multi lines
strings
EOD;

$heredoc = <<<EOD
The difference between newdoc and heredoc is a single quote
and the heredoc can interpolate strings: $dbl_quotes
EOD;

$concatened = "This string" . " is concatened";
echo $concatened;
echo 'Multi', 'Parameter', 'Valid';
