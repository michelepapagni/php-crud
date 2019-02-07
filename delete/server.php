<?php

    include '../env.php';

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
    {
        die('Errore');
    }

    $id = $_POST['id'];

    $sql = "DELETE FROM `stanze` WHERE `id` = $id;";

    $result = $conn->query($sql);

    if ($result == true)
    {
        echo 'OK';
    }
    else {
        echo 'KO';
    }

    $conn->close();

?>
