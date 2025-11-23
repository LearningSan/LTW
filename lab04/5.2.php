<?php
// Dữ liệu để điền vào bảng
$data = [
    ["Masanpham", "Tensanpham"],
    ["Sp1", "Sản phẩm 1"],
    ["Sp2", "Sản phẩm 2"],
    ["Sp3", "Sản phẩm 3"]
];

// Bắt đầu tạo bảng
echo '<table border="1">';

// Duyệt qua dữ liệu và tạo các dòng với các cột
$i=0;
foreach ($data as $row) {
    echo '<tr>';
{
    foreach ($row as $cell) {
        if($i==0){
            echo '<td>' . $cell . '</td>';
        }
        else
        {
            echo '<td>' . $cell . '</td>';
        }
    }
}
    echo '</tr>';
}

// Kết thúc bảng
echo '</table>';
?>