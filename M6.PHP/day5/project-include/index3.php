<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Điểm chung của hàm include, include_once, require, require_once
        là cả 4 đều được sử dụng để nạp 1 file php vào 1 file php khác

        Điểm khác nhau:
        1- include nạp file nếu gặp lỗi trong quá trình nạp file thì nó vẫn chạy tiếp
        2- include_once nạp file nếu gặp lỗi trong quá tình nạp file thì nó vẫn chạy tiếp
        nhưng nếu gọi include 2 lần thì php nó sẽ nạp 2 lần
        còn nếu nhập nhiều lần với include_once thì nó chỉ nạp 1 lần
        3- require nạp file nếu gặp lỗi trong quá trình nạp file thì nó sẽ dừng ngay
        4- require_once nạp file nếu gặp lỗi trong quá trình nạp file thì nó sẽ dừng ngay
        nhưng nó chỉ nạp 1 lần duy nhất
    </pre>
</body>
</html>