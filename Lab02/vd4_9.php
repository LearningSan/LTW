<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>lab 2_5</title>
</head>

<body>
    <?php

    require("lab2_5a.php");
    require("lab2.php");
    require("lab2.php");

    if (isset($x))
        echo "Giá trị của x là: $x"; //4.6) x=30, file lab2_5b.php duoc goi 2 lan nen no cong 10 2 lan
    else
        echo "Biến x không tồn tại";
    //include và require trong PHP đều dùng để nhúng một tệp vào tệp hiện tại, nhưng khác nhau ở cách xử lý lỗi khi không tìm thấy tệp. 
    //include chỉ tạo cảnh báo (E_WARNING) và tiếp tục thực thi, trong khi require tạo lỗi nghiêm trọng (E_COMPILE_ERROR) và dừng toàn bộ quá trình thực th
    ?>
</body>

</html>