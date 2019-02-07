<?php include '../partials/_head.php'; ?>
<?php include '../partials/_navbar.php'; ?>

    <?php
        include '../functions.php';

        $room = findRoomById($_GET['id']);

        if (empty($room))
        {
            die('Id non trovato');
        }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    Stanza con id <?php echo $room['id']; ?>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Numero stanza: <?php echo $room['room_number']; ?></li>
                    <li class="list-group-item">Numero piano: <?php echo $room['floor']; ?></li>
                    <li class="list-group-item">Numero letti: <?php echo $room['beds']; ?></li>
                    <li class="list-group-item">Creata il: <?php echo $room['created_at']; ?></li>
                    <li class="list-group-item">Aggiornata il: <?php echo $room['updated_at']; ?></li>
                  </ul>
                </div>
            </div>
        </div>
    </div>

<?php include '../partials/_footer.php'; ?>
