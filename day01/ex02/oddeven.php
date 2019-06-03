<?php

echo 'Enter a number: ';
while ($testcase = fgets(STDIN)) {
    $testcase = mb_substr($testcase, 0, -1);
    if (ctype_digit($testcase)) {
        if ($testcase % 2 == 0) {
            echo "The number $testcase is even";
        }
        else {
            echo "The number $testcase is odd";
        }
    }
    else {
        echo "'$testcase' is not a number";
    }
	echo "\nEnter a number: ";
}
echo "\n";
?>