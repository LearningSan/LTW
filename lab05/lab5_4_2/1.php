<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="2.php" method="get">
    <input type="text" name="tensp">
    <input type="radio" name="type" value="gandung"  checked>Gần đúng
    <input type="radio" name="type" value="chinhxac">Chính xác
    <select name="loai">
        <option value="tatca" selected>Tất cả</option>
        <option value="loai1">Loại 1</option>
                <option value="loai2">Loại 2</option>
        <option value="loai3">Loại 3</option>
    </select>
      <button type="submit" name="btn_submit">Send</button>

    </form>
</body>
</html>