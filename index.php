<?php include 'partials/_head.php'; ?>
<?php include 'partials/_navbar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Tutte le stanze</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="http://localhost/Boolean/php-crud/create/form.php" class="btn btn-primary">
                Crea nuova stanza
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>N Stanza</th>
                        <th>Piano</th>
                        <th>N Letti</th>
                        <th>Visualizza</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'database.php'; ?>

                    <?php foreach ($rooms as $room) { ?>
                        <tr>
                            <td><?php echo $room['id']; ?></td>
                            <td><?php echo $room['room_number']; ?></td>
                            <td><?php echo $room['floor']; ?></td>
                            <td><?php echo $room['beds']; ?></td>
                            <td>
                                <a href="http://localhost/Boolean/php-crud/show/show.php?id=<?php echo $room['id']; ?>" class="btn btn-primary">
                                    VAI
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'partials/_footer.php'; ?>
