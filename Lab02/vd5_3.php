<?php
// Khai báo các giá trị của a, b, c
$a = 3.5;
$b = 6;
$c = 3.5;

// Tính delta (b^2 - 4ac)
$delta = $b * $b - 4 * $a * $c;

// Kiểm tra xem delta có âm không
if ($delta > 0) {
    // Hai nghiệm thực phân biệt
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "Nghiệm x1 = $x1 và x2 = $x2\n";
} elseif ($delta == 0) {
    // Nghiệm kép
    $x = -$b / (2 * $a);
    echo "Nghiệm kép x = $x\n";
} else {
    // Không có nghiệm thực
    echo "Phương trình vô nghiệm thực.\n";
}
?>
