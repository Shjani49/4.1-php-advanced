<?php
// Before we can access storage on our server related to a particular client session,
// we need to announce we will use session using: session_start()
session_start();

function showCalcHistory () {
  echo '<pre>';
  var_dump( $_SESSION );
  echo '</pre>';
  if ( isset( $_SESSION['calc-history'] ) && !empty( $_SESSION['calc-history'] ) ) {
    ?>
      <ul>
        <?php foreach ( $_SESSION['calc-history'] as $historyItem ) : ?>
          <li>
            <?php echo $historyItem; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php
  }
}