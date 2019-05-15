<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>in ra 1 chuỗi có kí tự nháy đơn hay nháy kép</h1>
    <h1>in ra 1 chuỗi chào 'hà nội' thì mình nên dùng nháy kép bao nháy đơn</h1>
    <?php echo "chao ' ha noi '"; ?>
    <h1>in ra chuỗi chào "hà nội" thì mình nên dùng nháy đơn bao nháy kép</h1>
    <?php echo 'chao "hanoi"'; ?>
    <h1>Tại sao lại phải dùng quy tắc này</h1>
    <div>bởi vì php cần phân biệt đâu là nháy bao chuỗi đâu là nháy bao màn hình</div>
    <h1>Nháy bên ngoài cùng là nháy dùng để bao chuỗi trong php</h1>
    <h1>Nháy bên trong là nháy thật sự xuất ra màn hình</h1>
    <h1>Để phân biệt chức năng của 2 nháy thì mình cần dùng quy tắc</h1>
    <ol>
        <li>trong chuỗi nháy đơn thì dùng nháy kép để bao chuỗi</li>
        <li>trong chuỗi nháy kép thì dùng nháy đơn để bao chuỗi</li>
    </ol>
    <h1>in ra chuỗi có nháy đơn chào 'hà nội'</h1>
    <h1>Nếu copy chuỗi có '' vào trong echo ''; thì phpstorm sẽ để ra ký tự escape \
        để giúp php phân biệt đâu là nháy đơn bao chuỗi đâu là nháy đơn xuất ra màn hình</h1>
    <h1>Nháy đơn có escape \ trước \' thì php sẽ hiểu đây là cái chuỗi cần xuất ra màn hình</h1>
    <?php echo 'chào \'hà nội\''; ?>
    <h1>Áp dụng tương tự với ""</h1>
    <?php echo "chào \"hà nội\""; ?>
</body>
</html>