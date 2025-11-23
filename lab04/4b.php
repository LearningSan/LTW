<?php
// Mảng ban đầu
$a = array(1, -3, 5); // mảng có 3 phần tử
$b = array("a"=>2, "b"=>4, "c"=>-6); // mảng có 3 phần tử, các index là chuỗi

// a. Đếm số phần tử có giá trị dương của mảng $a
$count_positive_a = 0;
foreach ($a as $value) {
    if ($value > 0) {
        $count_positive_a++;
    }
}

// b. Tạo mảng mới chứa các phần tử dương trong mảng $b
$c = array();
foreach ($b as $k => $v) {
    if ($v > 0) {
        $c[$k] = $v; // Lưu giá trị dương vào mảng $c với key tương ứng
    }
}

?>

<!-- Hiển thị nội dung mảng $a -->
<p>Nội dung giá trị mảng a:</p>
<?php
foreach ($a as $value) {
    echo $value . " ";
}
?>

<br> 
<p>Nội dung mảng a (key-value):</p>
<?php
foreach ($a as $key => $value) {
    echo "($key - $value) ";
}
?>

<br />
<p>Nội dung mảng b (key - value):</p>
<?php
foreach ($b as $k => $v) {
    echo "($k - $v) ";
}
?>

<br />
<p>Số phần tử dương trong mảng a: <?php echo $count_positive_a; ?></p>

<p>Mảng c chứa các phần tử dương từ mảng b:</p>
<?php
foreach ($c as $k => $v) {
    echo "($k - $v) ";
}

?>

<br />
<p>Hiển thị nội dung mảng b ra dạng bảng:</p>
<table border="1">
    <tr><td>STT</td><td>Key</td><td>Value</td></tr>
    <?php
    $i = 0;
    foreach ($b as $k => $v) {
        $i++;
        echo "<tr><td>$i</td>";
        echo "<td>$k</td>";
        echo "<td>$v</td></tr>";
    }
    ?>
</table>
