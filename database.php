<?php

    $servername = 'localhost';
    $username = 'root';
    $password = 'Mike2807';
    $dbname = 'hotel_booleana';

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
    {
        echo 'Si è verificato un errore: ' . $conn->connect_error;
    }

    $sql = 'SELECT * FROM `stanze`';
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        $rooms = [];

        while ($row = $result->fetch_assoc()) {
            $rooms[] = $row;
        }
    }

    $conn->close();

?>
