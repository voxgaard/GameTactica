<?php include 'included/header.php' ?>
  <?php
    $sql = 'SELECT * FROM `Recruitment` ORDER BY `Recruitment`.`arrived` DESC';
    $result = mysqli_query($conn, $sql);
    $announced = mysqli_fetch_all($result, MYSQLI_ASSOC);
  ?>
    <h2>Announcements</h2>
    <div id="search"></div>
    <?php if(empty($announced)): ?>
      <p class="lead mt3">Nothing has been announced, yet.</p>
    <?php endif; ?>

  <?php foreach($announced as $item): ?>
    <article class="card my-3 w-50">
     <div class="card-body">
      <?php echo $item['alias'] . ' has joined our ranks!'; ?>
        <div class="text-secondary mt-2">
          <?php echo $item['arrived']; ?>
        </div>
     </div>
    </article>
  <?php endforeach; ?>
  
  <?php include 'included/footer.php' ?>