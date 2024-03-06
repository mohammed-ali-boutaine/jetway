<?php
include "inc/header.php";
include "db/db.php";
?>

<div class="feedbacks container">
<h2 class="text-center">Past Feedback</h2>
  <?php
  $result = $conn->prepare("SELECT * FROM feedback");
  $result->execute();
  $rows = $result->fetchAll();
  ?>



  <?php if (count($rows) === 0): ?>
    <p class="lead mt-3">There is no feedback</p>
  <?php endif; ?>

  <?php foreach ($rows as $item): ?>
    <div class="card feedback-loop">
      <div class="card-body text-center">
        <p class="main-text">
        <?php echo $item['message']; ?>
        </p>

        <div class="text-secondary mt-2">
          By <?php echo $item['name']; ?> on <?php echo date_format(date_create($item['feedbackDate']), 'g:ia \o\n l jS F Y'); ?>
        </div>

        <div class="text-secondary mt-2">Contact <?php echo $item['email']; ?></div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<?php include "inc/footer.php"; ?>
