<?php
$s=0;
for($i=2;$i<=100;$i+=2)
   $s+=$i;
echo "dung vong lap for ket qua:$s";

$s=0;
$j=0;
while($j<=100){
     $s+=$j;
     $j+=2;
}
echo "dung vong lap while ket qua:$s";
$s=0;
$k=0;
do{
    $s+=$k;
 $k+=2;
}while($k<=100);
echo "dung vong lap dowhile while ket qua:$s";

?>