<?php include 'included/header.php' ?>

    <h2>About</h2>

    <p class="text-center">GameTactica seeks to form communties for complex, multiplayer franchises. <br>
                            GameTactica seeks to organize its members into decentralized chapters/campaigns. <br>
                            GameTactica seeks to promote the innovation of the games we sanction via modding.</p>

    <div id="search"></div>

    <?php
    $sql = 'SELECT * FROM Games';
    $result = mysqli_query($conn, $sql);
    $announced = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

    <?php foreach($announced as $item): ?>
        <article class="card my-3 w-40">
            <div class="card-body">
            <?php echo 'GameTactica support and organization for ' . $item['name'] . ' is ' . $item['strength'] . '.'; ?>
                <div class="text-secondary mt-2">
                <?php echo 'Developed by ' . $item['creator']; ?>
                </div>
            </div>
        </article>
    <?php endforeach; ?>

<?php include 'included/footer.php' ?>