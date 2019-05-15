<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Khi 1 biến trong php mà cộng, trừ, nhân, chia, chia lấy dư với chính nó
        thì các bạn sẽ có cách viết rút gọn là chuyển toán tử lên trước dấu bằng
        $a = $a + 1; => $a += 1;
        $b = $b - 3; => $b -= 3;
        $c = $c * 5; => $c *= 5;
        $d = $d / 4; => $d /= 1;
        $a = $e + 1; => $e %= 1;
        toán tử ++ là toán tử tăng thêm 1 đơn vị
        toán tử -- là toán tử giảm đi 1 đơn vị
    </pre>

    <?php
        $a = 5;
        $a++;
        echo $a;
    ?>

</body>
</html>