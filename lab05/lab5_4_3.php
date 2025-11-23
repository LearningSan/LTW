<?php
// Khởi tạo biến
$nameuser = $_POST['name'] ?? '';
$pass = $_POST['pass'] ?? '';
$checkpass = $_POST['checkpass'] ?? '';
$gt = $_POST['gt'] ?? 'Nam';
$st = $_POST['st'] ?? [];
$tinh = $_POST['tinh'] ?? '';
$listImages = $_FILES['hinh'] ?? [];

$err = '';
$listSrc = [];

if (isset($_POST['btn_submit'])) {
header("location:lab5_2.php");
    // Kiểm tra mật khẩu
    if ($pass != $checkpass) {
        $err .= "Mật khẩu và nhập lại mật khẩu không trùng nhau <br>";
        $pass = $checkpass = ''; // reset 2 ô mật khẩu
    }
    var_dump($listImages);
    // Upload nhiều ảnh
    $arrImg = ['image/jpg', 'image/jpeg', 'image/png', 'image/bmp', 'image/gif'];

    if (!empty($listImages['name'][0])) {
        for ($i = 0; $i < count($listImages['name']); $i++) {
            $errImg = $listImages['error'][$i];
            if ($errImg > 0)
                $err .= "Lỗi file hình thứ " . ($i + 1) . "<br>";
            else {
                $imgType = $listImages['type'][$i];
                if (!in_array($imgType, $arrImg))
                    $err .= "File thứ " . ($i + 1) . " không phải file hình<br>";
                else {
                    $temp = $listImages['tmp_name'][$i];
                    $name = $listImages['name'][$i];
                    if (!move_uploaded_file($temp, "images/$name"))
                        $err .= "Không thể lưu file thứ " . ($i + 1) . "<br>";
                    else
                        $listSrc[] = $name;
                }
            }
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Đăng ký</title>
</head>
<body>


<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Tên đăng nhập</td>
            <td><input type="text" name="name" required value="<?php echo $nameuser; ?>"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="text" name="pass" required value="<?php echo $pass ?>"></td>
        </tr>
        <tr>
            <td>Nhập lại mật khẩu</td>
            <td><input type="text" name="checkpass" required value="<?php echo $checkpass ?>"></td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td>
                <input type="radio" name="gt" value="Nam" <?php if($gt=='Nam') echo 'checked'; ?>>Nam
                <input type="radio" name="gt" value="Nữ" <?php if($gt=='Nữ') echo 'checked'; ?>>Nữ
            </td>
        </tr>
        <tr>
            <td>Sở thích</td>
            <td>
                <input type="checkbox" name="st[]" value="An" <?php if(in_array('An',$st)) echo 'checked'; ?>>An
                <input type="checkbox" name="st[]" value="Ngu" <?php if(in_array('Ngu',$st)) echo 'checked'; ?>>Ngu
                <input type="checkbox" name="st[]" value="Di choi" <?php if(in_array('Di choi',$st)) echo 'checked'; ?>>Di chơi
            </td>
        </tr>
        <tr>
            <td>Tỉnh</td>
            <td>
                <select name="tinh" required>
                    <option value="">Chọn tỉnh</option>
                    <option value="Hà nội" <?php if($tinh=='Hà nội') echo 'selected'; ?>>Hà nội</option>
                    <option value="Hồ Chí Minh" <?php if($tinh=='Hồ Chí Minh') echo 'selected'; ?>>Hồ Chí Minh</option>
                    <option value="Nghệ An" <?php if($tinh=='Nghệ An') echo 'selected'; ?>>Nghệ An</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinh[]" multiple></td>
        </tr>
    </table>
    <button type="submit" name="btn_submit">Submit</button>
    <button type="reset">Reset</button>
</form>
<?php
if ($err != '') {
    echo "<p style='color:red'>$err</p>";
} elseif (isset($_POST['btn_submit'])) {
    // Hiển thị thông tin nếu không có lỗi
    echo "<p>Ten: $nameuser</p>";
    echo "<p>Mật khẩu: $pass</p>";
    echo "<p>Giới tính: $gt</p>";
    echo "<p>Sở thích: " . implode(", ", $st) . "</p>";
    echo "<p>Tỉnh: $tinh</p>";
    foreach ($listSrc as $img) {
        echo "<img src='images/$img' style='max-width:150px;margin:5px;'><br>";
    }
}
?>
</body>
</html>
