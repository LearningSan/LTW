<pre><?php

$a = array("a"=>2, "b"=>4, "c"=>6);//mảng có 3 phần tử.Các index của mảng là chuỗi
/*
$c['a']= 2;
$c['b'] = 4;
$c['c'] = 6
*/


$index = "a";
if(isset($a[$index]))
   unset($a[$index]);
print_r($a);

?>