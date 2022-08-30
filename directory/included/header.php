<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>GameTactica</title>
  <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>
<body>
  <?php include '../config/database.php' ?>
  <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
    <div class="container">
      <a class="navbar-brand" href="./GTindex.html">GameTactica Campaigns</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
         <li class="nav-item">
              <a class="nav-link" href="./enlistment.php">Enlistment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./announcements.php"
                >Announcements</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./meta.php"
                >Meta</a
              >
            </li>
        </ul>
      </div>
  </div>
</nav>

<main>
  <div class="container d-flex flex-column align-items-center">
    <img src="../assets/images/GT_LOGO.jpg" class="w-10 mb-3" alt="">