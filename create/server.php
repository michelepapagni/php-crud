<?php

    $roomNumber = $_POST['room_number'];
    $floor = $_POST['floor'];
    $beds = $_POST['beds'];

    if (empty($roomNumber) || empty($floor) || empty($beds))
    {
        die('Errore');
    }

    include '../env.php';

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
    {
        echo 'Si è verificato un errore: ' . $conn->connect_error;
    }

    $sql = "INSERT INTO `stanze` (`room_number`, `floor`, `beds`, `created_at`, `updated_at`) VALUES ('$roomNumber', '$floor', '$beds', NOW(), NOW());";

    $result = $conn->query($sql);

    if ($result == true)
    {
        echo 'OK';
    }
    else {
        echo 'Si è verificato un errore';
    }

    $conn->close();

?>
