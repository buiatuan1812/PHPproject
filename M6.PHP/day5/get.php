<?php
    if(isset($_GET['chieucao']) && isset($_GET['cannang'])) {
        echo 'Chiều Cao: '.$_GET['chieucao'].'<br>';
        echo 'Cân Nặng: '.$_GET['cannang'].'<br>';
    }

    $ibm = $_GET['cannang']/($_GET['chieucao'] * $_GET['chieucao']);

    if ($ibm < 18.5) {
        echo "Phân loại: Gầy <br>";
        echo "Nguy cơ phát triển bệnh: Thấp<br>";

    } elseif ($ibm >= 18.5 && $ibm < 25) {
        echo "Phân loại: Bình thường <br>";
        echo "Nguy cơ phát triển bệnh: Trung bình<br>";
    } elseif ($ibm >= 25 && $ibm < 30) {
        echo "Phân loại: Hơi béo <br>";
        echo "Nguy cơ phát triển bệnh: Cao<br>";
    } elseif ($ibm >= 30 && $ibm < 35) {
        echo "Phân loại: Béo phì cấp độ 1 <br>";
        echo "Nguy cơ phát triển bệnh: Cao<br>";
    } elseif ($ibm >= 35 && $ibm < 40) {
        echo "Phân loại: Béo phì cấp độ 2 <br>";
        echo "Nguy cơ phát triển bệnh: Rất cao<br>";
    } elseif ($ibm >= 40 ) {
        echo "Phân loại: Béo phì cấp độ 3 <br>";
        echo "Nguy cơ phát triển bệnh: Nguy hiểm<br>";
    }
?>
