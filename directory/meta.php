<?php include 'included/header.php' ?>

    <h2>About</h2>

    <p class="text-center">GameTactica is a socio-ludic organization
                        which aspires to deviate from conventional
                        paradigms.  We believe that games are at
                        their best when the people who actively
                        play them are also those who contribute towards
                        building and maintaining the project.  We 
                        contend that the estrangement of these two
                        categories of persons is why the integrity of
                        projects is necessarily compromised by the
                        monetization of them.  We seek to dispel that divide
                        and equip people with the community, education, and
                        tools which allow them to seize control of
                        the direction and quality of the games which
                        they invest their time and effort into.</p>

    <?php
    $sql = 'SELECT * FROM Games';
    $result = mysqli_query($conn, $sql);
    $announced = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

    <?php foreach($announced as $item): ?>
        <div class="card my-3 w-40">
            <div class="card-body">
            <?php echo 'GameTactica support and organization for ' . $item['name'] . ' is ' . $item['strength'] . '.'; ?>
                <div class="text-secondary mt-2">
                <?php echo 'Developed by ' . $item['creator']; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

<?php include 'included/footer.php' ?>