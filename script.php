<?php
  $connection = mysqli_connect('127.0.0.1', 'root', '', 'risk 2.0');
  if($connection == false)
  {
    echo "error";
  }
  foreach ($_GET as $value) {
    mysqli_query($connection, "INSERT INTO `orders` (`user_id`, `meal_id`) VALUES ('1', $value)");
  }
?>
