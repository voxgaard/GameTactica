<?php include 'included/header.php' ?>

<?php
  //initialize form variables
  $name = $email = $discord = '';
  $nameBad = $emailBad = $discordBad = '';
  //form Submit
  if(isset($_POST['submit'])) {
    //name check
    if(empty($_POST['name'])) {
     $nameBad = 'An alias is required...!';
    } else {
      $name = filter_input(
              INPUT_POST, 
              'name', 
              FILTER_SANITIZE_FULL_SPECIAL_CHARS
            );
    }

    //email check
    if(empty($_POST['email'])) {
     $emailBad = 'An email address is required...!';
    } else {
      $email = filter_input(INPUT_POST, 
                            'email', 
                            FILTER_SANITIZE_FULL_SPECIAL_CHARS
                          );
    }

    //discord check
    if(empty($_POST['discord'])) {
     $discordBad = 'A discord ID is required...!';
    } else {
      $discord = filter_input(INPUT_POST,
                              'discord', 
                              FILTER_SANITIZE_FULL_SPECIAL_CHARS
                            );
    }

    //database insertion
    if(empty($nameBad) && empty($emailBad) && empty($discordBad)) {
      $sql = "INSERT INTO Recruitment (alias, email, discord) VALUES ('$name', '$email', '$discord')";

    if(mysqli_query($conn, $sql)) {
    //Succeeded
      header('Location: ./announcements.php');
    } else {
    //Failed
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}

?>

    <h2>Enlistment</h2>
    <p class="lead text-center">Become a GameTactica member</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Alias</label>
        <input type="text" class="form-control <?php echo $nameBad ? 'is-invalid' : null; ?>" id="name" name="name" placeholder="Enter a GameTactica username">
          <div class="invalid-feedback">
            <?php echo $nameBad; ?>
          </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $emailBad ? 'is-invalid' : null; ?>" id="email" name="email" placeholder="Enter an email for us to contact you with">
          <div class="invalid-feedback">
            <?php echo $emailBad; ?>
          </div>
      </div>
      <div class="mb-3">
        <label for="discord" class="form-label">Discord</label>
        <input type="text" class="form-control <?php echo $discordBad ? 'is-invalid' : null; ?>" id="discord" name="discord" placeholder="Enter a discord ID so that we may invite you to our server">
          <div class="invalid-feedback">
            <?php echo $discordBad; ?>
          </div>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
<?php include 'included/footer.php' ?>