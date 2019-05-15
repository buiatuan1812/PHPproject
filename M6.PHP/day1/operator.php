<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Các toán tử phổ biến tỏng php</h1>
    <h1>Trong php sử dụng dấu . để nối chuỗi</h1>
    <?php
        $a = 9;
        $b = 5;
        $tong = $a + $b;
        $hieu = $a - $b;
        $tich = $a * $b;
        $thuong = $a / $b;
        $sodu = $a % $b;

        echo "cho 2 số a = 9 và b = 5 ta có:";
        echo "Tổng của 2 số a,b là: " . $tong;
        echo "Hiệu của 2 số a,b là: " . $hieu;
        echo "Tích của 2 số a,b là: " . $tich;
        echo "Thương của 2 số a,b là: " . $thuong;
        echo "Số dư của 2 số a,b là: " . $sodu;
        echo "<br>" . "chào" . "Hà Nội";
    ?>


</body>
</html>