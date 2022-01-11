<?php
function getCheckUP() {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli("127.0.0.1", "mysql", "mysql", "check-up");

    $result = $mysqli->query("SELECT * FROM `check-up`");

    $checkUp = [];

    foreach ($result as $row) {
        array_push($checkUp, $row);
    }

    return $checkUp;
}
