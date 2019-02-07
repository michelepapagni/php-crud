<?php

    include '../env.php';

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
    {
        die('Si è verificato un errore');
    }

    $id = $_POST['id'];
    $roomNumber = $_POST['room_number'];
    $floor = $_POST['floor'];
    $beds = $_POST['beds'];

    if (
        empty($id)
        || empty($roomNumber)
        || empty($floor)
        || empty($beds)
        ) {
            die('Manda tutti i dati');
        }

    $sql = "UPDATE `stanze` SET `room_number` = '$roomNumber', `floor` = '$floor', `beds` = '$beds', `updated_at` = NOW() WHERE `id` = $id;";

    $result = $conn->query($sql);

    if ($result == true)
    {
        echo 'Ok';
    }
    else {
        echo 'KO';
    }

    $conn->close();
?>
