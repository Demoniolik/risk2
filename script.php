<h1><?php
  $connection = mysqli_connect('127.0.0.1', 'root', '', 'risk 2.0');
  if($connection == false)
  {
    echo "error";
  }
  echo "Ваш заказ: ".'<br>';
  $money = 0;
  foreach ($_GET as $value) {
    mysqli_query($connection, "INSERT INTO `orders` (`user_id`, `meal_id`) VALUES ('1', $value)");
  }
  $result = mysqli_query($connection, "SELECT m.meal_name, m.meal_value FROM meals m, orders o WHERE m.meal_id = o.meal_id and o.user_id = 1");
  	if(mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
          	echo $row[meal_name] . " - ". $row[meal_value].' UAH<br>';
          	$money = $money + $row[meal_value];
          }
      }
  echo "Your check: $money UAH";
?>
<h1>