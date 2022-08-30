<?php include 'included/header.php' ?>
  <?php
    $sql = 'SELECT * FROM Recruitment';
    $result = mysqli_query($conn, $sql);
    $announced = mysqli_fetch_all($result, MYSQLI_ASSOC);
  ?>
    <h2>Announcements</h2>
    <?php if(empty($announced)): ?>
      <p class="lead mt3">Nothing has been announced, yet.</p>
    <?php endif; ?>

  <?php foreach($announced as $item): ?>
    <div class="card my-3 w-50">
     <div class="card-body">
      <?php echo $item['alias'] . ' has joined our ranks!'; ?>
        <div class="text-secondary mt-2">
          <?php echo $item['arrived']; ?>
        </div>
     </div>
    </div>
  <?php endforeach; ?>
  <?php include 'included/footer.php' ?>