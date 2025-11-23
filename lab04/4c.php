<?php
function showArray($arr)
{
    foreach($arr as $k=>$v)
    {
        echo "<br> $k - $v ";    
    }    
}

$a = array(6, 2, 7, 8, 5); 
$b = array("a"=>4, "b"=>2, "c"=>3, "d"=>8);

// In phần tử ngẫu nhiên từ mảng a
$n = array_rand($a);
echo "Phần tử ngẫu nhiên: key=$n , giá trị=".$a[$n];

// Lấy 3 phần tử ngẫu nhiên từ mảng a
$c = array_rand($a, 3);
echo "<br> Danh sách 3 phần tử ngẫu nhiên được lấy ra:";
foreach($c as $k)
{
    echo "(key=$k - value={$a[$k]})";
}

// Lấy 3 phần tử ngẫu nhiên từ mảng b
$m = 3;
$c = array_rand($b, $m);
echo "<br> Danh sách $m phần tử ngẫu nhiên được lấy ra từ b:";
foreach($c as $k)
{
    echo "(key=$k - value={$b[$k]})";
}
?>
<hr />
<?php
// Sắp xếp mảng a theo chiều giảm dần (không giữ key)
$a1 = $a;
rsort($a1);
echo "Mảng a sau khi sắp xếp giảm dần (không giữ key):";
showArray($a1);

// Sắp xếp mảng b theo chiều giảm dần mà không giữ key
$b1 = $b;
arsort($b1);  // Sắp xếp mảng b theo chiều giảm dần nhưng giữ key
echo "<br>Mảng b sau khi sắp xếp giảm dần (giữ key):";
showArray($b1);

// Tính tổng các giá trị trong mảng a và mảng b
$sum_a = array_sum($a);
$sum_b = array_sum($b);
echo "<hr> Tính tổng ";
echo "<br> Tổng các giá trị trong mảng a = $sum_a , mảng b= $sum_b ";
?>
