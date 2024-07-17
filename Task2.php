<?php 
//REQ1
$n = 8 ; 

for ($i = 1; $i <= $n; $i++) {
    echo $i  . "<br>";
}
 echo "<hr>";

 //REQ2
 $n=11;

for ($i = 1; $i <= $n; $i++) {
    
    if ($i % 2 == 0) {
       
        echo $i . "<br>";
        
    }
}
echo "<hr>";
//REQ3
$numbers = [10, 5, 8, 20, 3,90];

$maxNumber = max($numbers);


echo "The maximum number is: " . $maxNumber . "<hr>";
//REQ4
function isPrime($n) {
  
    if ($n < 2) {
        return false;
    }

    
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}
$n=69;
if (isPrime($n)) {
    echo "$n is a prime number.";
} else {
    echo "$n is not a prime number.";
}
echo "<hr>";
//REQ5
function isPalindrome($n) {
    $strNumber = strval($n);
    $reversedStrNumber = strrev($strNumber);
    if ($strNumber === $reversedStrNumber) {
        return true;
    } else {
        return false;
    }
}
$n = 1212;
$strNumber = strval($n);
$reversedStrNumber = strrev($strNumber);
if (isPalindrome($n)) {
    echo $reversedStrNumber . "<br>" ; 
    echo "YES <hr>";
} else {
    echo $reversedStrNumber . "<br>";
    echo "NO <hr>" ;
}
//REQ6
function printDivisors($n) {
    $divisors = array();
    for ($i = 1; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            echo $i . "<br>";
            if ($i != $n / $i) {
                $divisors[] = $n / $i;
            }
        }
    }
    for ($j = count($divisors) - 1; $j >= 0; $j--) {
        echo $divisors[$j] . "<br>";
    }
}
$n=6;
printDivisors($n);
echo "<hr>";
//REQ7
function isLucky($number) {
   
    $numStr = strval($number);
    $len = strlen($numStr);
    
   
    for ($i = 0; $i < $len; $i++) {
        if ($numStr[$i] != '4' && $numStr[$i] != '7') {
            return false;
        }
    }
    
    return true;
}
$a=1;
$b=100;
for ($num = $a; $num <= $b; $num++) {
    if (isLucky($num)) {
        echo $num . "<br>";
        $found = true;
    }
}
if (!$found) {
    echo '-1';
}

echo "<hr>";
//REQ8
$n=10;
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat('*', $i) . "<br>";
}
?>