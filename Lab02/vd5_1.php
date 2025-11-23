<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a=2;
$b=5;
$nguyen= floor($b/$a);
$du=$b-$a*$nguyen;
echo "$b/$a=",round($b/$a,2);
echo " <br> phannguyen=$nguyen,phandu=$du";
?>
</body>
</html>
