<?php
// REQ 1 
$name="Islam";
echo " Hello $name <hr>"; 

//REQ 2
$x=20;
$y=40;
$result=$x+$y;
echo "$x + $y = $result <br>";
$result=$x*$y;
echo "$x * $y = $result <br>";
$result=$x-$y;
echo "$x - $y = $result <hr>";

//REQ 3
$a=-3;
$b= 5;
$c= 9;
$d=17;
$diff= $a - $b - $c - $d;
echo "$a $b $c $d <br>";
echo "Difference = $diff <hr>";

//REQ 4
$x = "99"; 
$y = "78";
 $xLast =substr($x, strlen($x)-1); 
 $yLast =substr($y, strlen($y)-1);
 echo "$x  $y <br>";
echo $xLast + $yLast ;
echo "<hr>";


//REQ 5

echo $x="9798 <br>";
if ($x[0]%2==0){
echo "EVEN <hr>";
}else{
    echo"ODD <hr>";
};

echo $a="8 ";
echo $b="18 ";
echo $k="3";


    if ($a%$k==0 && $b%$k==0){ 
        echo "<br> Both <hr>";
       }
        else if($a%$k==0 && $b%$k!=0){
        echo "<br>MEMO<hr>";
       }
        else if($a%$k!=0 && $b%$k==0){
        echo "<br>MOMO<hr>";
       }
        else if($a%$k!=0 && $b%$k!=0) {
        echo "<br>No one<hr>";
    }

//REQ 6

echo $a="55 <br>";


if ($a[0]%$a[1]==0 or $a[1]%$a[0]==0){
    echo "YES <hr> <hr>";
}else{
    echo "NO <hr> <hr>";
}




/* //empty
$var =NULL;
if (empty($var)) {
    echo '$var is set even though it is empty <br>';
}
$var =NULL;
if (isset($var)) {
    echo '$var is set even though it is empty';
}else{
    echo "NULL SO NO OUTPUT";
}
 */

?>
  
