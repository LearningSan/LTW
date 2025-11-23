<?php
// Dữ liệu để điền vào bảng
$data = [
    ["Index", "Value"],
    ["...", "..."],
    ["...", "..."],
    ["...", "..."]
];

// Bắt đầu tạo bảng
echo '<table border="1">';

// Duyệt qua dữ liệu và tạo các dòng với các cột
foreach ($data as $row) {
    echo '<tr>';
    foreach ($row as $cell) {
        echo '<td>' . $cell . '</td>';
    }
    echo '</tr>';
}

// Kết thúc bảng
echo '</table>';
?>