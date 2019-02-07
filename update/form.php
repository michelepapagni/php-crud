<?php include '../partials/_head.php'; ?>
<?php include '../partials/_navbar.php'; ?>

    <?php
        include '../functions.php';

        $id = $_GET['id'];

        $room = findRoomById($id);

        if (empty($room))
        {
            die('Id non trovato');
        }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiorna la stanza con id: <?php echo $_GET['id']; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="form-group" method="post" action="http://localhost/Boolean/php-crud/update/server.php">

                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                    <div class="form-group">
                        <label for="room_number">Numero Stanza</label>
                        <input type="text" class="form-control" name="room_number" placeholder="Inserisci il numero della stanza" value="<?php echo $room['room_number']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="floor">Numero piano</label>
                        <input type="text" class="form-control" name="floor" placeholder="Inserisci il numero del piano" value="<?php echo $room['floor']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="beds">Numero letti</label>
                        <input type="text" class="form-control" name="beds" placeholder="Inserisci il numero dei letti" value="<?php echo $room['beds']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Salva" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include '../partials/_footer.php'; ?>
