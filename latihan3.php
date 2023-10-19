<?php
    $_GET["angkapertama"];
    $_GET["suhu"];

$CtoF = 9/5 * $_GET["angkapertama"] + 32;
$CtoR = 4/5 * $_GET["angkapertama"];
$CtoK = $_GET["angkapertama"] + 273;

    if ($_GET["suhu"] == "2") {
        echo $CtoR . " °R";

    } elseif ($_GET["suhu"] == "3") {
        echo $CtoF . " °F";

    } elseif ($_GET["suhu"] == "1") {
        echo $CtoK . " °K";
        
    } else {
        echo "Tidak sesuai pilihan yang tersedia";
    }
?>
