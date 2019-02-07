<?php include '../partials/_head.php'; ?>
<?php include '../partials/_navbar.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea nuova stanza</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="form-group" method="post" action="http://localhost/Boolean/php-crud/create/server.php">
                    <div class="form-group">
                        <label for="room_number">Numero Stanza</label>
                        <input type="text" class="form-control" name="room_number" placeholder="Inserisci il numero della stanza">
                    </div>
                    <div class="form-group">
                        <label for="floor">Numero piano</label>
                        <input type="text" class="form-control" name="floor" placeholder="Inserisci il numero del piano">
                    </div>
                    <div class="form-group">
                        <label for="beds">Numero letti</label>
                        <input type="text" class="form-control" name="beds" placeholder="Inserisci il numero dei letti">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Salva" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include '../partials/_footer.php'; ?>
