<?php
$ten=$_GET['tensp'];
$type=$_GET['type'];
$loai=$_GET['loai'];

if(isset($_GET['btn_submit'])){
 ?>   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
    echo "Ten san pham:$ten</br>";
        echo "Cách tìm:$type</br>";
            if ($loai !== "tatca") {

    echo "Loại sản phẩm:$loai</br>";}
    ?>
    <a href="1.php">Tro ve</a>
</body>
</html>

<?php }
?>