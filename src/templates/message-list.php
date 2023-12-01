<?php
  require_once __DIR__ . '/../data.php';
?>

<?php foreach($messageList as $key => $message) :?>
<div class="alert alert-primary d-flex justify-content-between" role="alert">
  <div class="message">
    <span class="fw-bold"><?php echo $message['name']; ?></span>
    <p><?php echo $message['content']; ?></p>
  </div>
  <div class="notation d-flex flex-column align-items-center justify-content-center">
    <a href="/actions/up-vote.php?index=<?php echo $key ?>">
      <i class="fa-solid fa-arrow-up"></i>
    </a>
    <?php
    if ($message['notation'] >= 1) {
    echo '<span style="color: green;">' . $message["notation"] . '</span>';
    } elseif ($message['notation'] == 0) {
    echo '<span>' . $message["notation"] . '</span>';
    } else {
      echo '<span style="color: red;">' . $message["notation"] . '</span>';
    }
    ?>
    <!-- <span style="color: red;"><?php echo $message['notation']; ?></span> -->
    <a href="/actions/down-vote.php?index=<?php echo $key ?>">
      <i class="fa-solid fa-arrow-down"></i>
    </a>
    <a href="/actions/delete-message.php?index=<?php echo $key ?>">
      <i class="fa-solid fa-trash"></i>
    </a>
  </div>
</div>
<?php endforeach; ?>