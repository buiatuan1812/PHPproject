<?php
    if(isset($_GET['chieucao']) && isset($_GET['cannang'])) {
        echo 'Chiều Cao: '.$_GET['chieucao'].'<br>';
        echo 'Cân Nặng: '.$_GET['cannang'].'<br>';
    }

    $ibm = $_GET['cannang']/($_GET['chieucao'] * $_GET['chieucao']);

    if ($ibm < 18.5) {
        echo "Phân loại: Gầy <br>";
        echo "Nguy cơ phát triển bệnh: Thấp<br>";

    } elseif ($ibm >= 18.5 && $ibm <= 24.9) {
        echo "Phân loại: Gầy <br>";
        echo "Nguy cơ phát triển bệnh: Thấp<br>";
    }
?>
