<?php
  $connection = mysqli_connect('127.0.0.1', 'root', '', 'risk 2.0');
  if($connection == false)
  {
    echo "error";
  }
?>
<!DOCTYPE html>
<html lang="uk">
<head>
  <title>Risk</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="">
  <link rel="shortcut icon" href="img/shortcut.jpg" type="image/png">

  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="css/assets.css">
  <link rel="Stylesheet" type="text/css" href="css/wSelect.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
</head>

<body>
  <div class="container-logo">
    <div class="logo animated fadeInDown">Risk</div>
  </div>

  <div class="content">

    <div class="top">
      <div class="category">
        <div class="cat drinks active">Напої</div>
        <div class="cat salad">Салати</div>
        <div class="cat firstdish">Перші страви</div>
        <div class="cat pizza">Піца</div>
        <div class="cat desert">Десерти</div>
        <div class="cat vine">Вино</div>
        <div class="cat rom">Ром</div>
      </div>
    </div>


    <form action="script.php" method="get">
    <div class="bottom">

      <div class="items drinks active">
        <?php
        $i = 1;
      $result = mysqli_query($connection, "SELECT * FROM meals WHERE restraunt_id = 1 and meal_category = 1");
      if(mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
        $i += 1;
        echo '<label for='."checkbox-item$row[meal_id]". ' class='."item".'>';
        echo '<input type= "checkbox" name='. "$i".' value='. "$row[meal_id]". ' id='."checkbox-item$row[meal_id]". '>' ?>

          <div class="item-left">
            <div class="item-img">
              <img src="img/cocktails.svg" alt="salad">
            </div>

            <div class="product">
              <div class="item-name">
                 <?php
                    echo "$row[meal_name]";
                  ?>
              </div>

              <div class="item-descr">
                 <?php
                    echo "$row[meal_description]";
                  ?>
              </div>
            </div>
          </div>

          <div class="item-right">
            <div class="item-price">
               <?php
                  echo "$row[meal_value]".'UAH';
                ?>
            </div>

            <div class="item-amount">
              <?php
                  echo "$row[meal_amount]";
              ?>
            </div>
          </div>
        </label>
        <?php
              }
      }
      ?>
      </div>

      <div class="items salad">
        <?php
      $result = mysqli_query($connection, "SELECT * FROM meals WHERE restraunt_id = 1 and meal_category = 2");
      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $i += 1;
          echo '<label for='."checkbox-item$row[meal_id]". ' class='."item".'>';
          echo '<input type= "checkbox" name='. "$i".' value='. "$row[meal_id]". ' id='."checkbox-item$row[meal_id]". '>' ?>

          <div class="item-left">
            <div class="item-img">
              <img src="img/salad.svg" alt="salad">
            </div>

            <div class="product">
              <div class="item-name">
                <?php
                  echo "$row[meal_name]";
              ?>
              </div>

              <div class="item-descr">
                <?php
                  echo "$row[meal_description]";
              ?>
              </div>
            </div>
          </div>

          <div class="item-right">
            <div class="item-price">
              <?php
                  echo "$row[meal_value]".'UAH';
              ?>
            </div>

            <div class="item-amount">
              <?php
                  echo "$row[meal_amount]";
              ?>
            </div>
          </div>
        </label>
        <?php
              }
      }
      ?>
      </div>


      <div class="items pizza">
        <?php
      $result = mysqli_query($connection, "SELECT * FROM meals WHERE restraunt_id = 1 and meal_category = 3");
      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $i += 1;
          echo '<label for='."checkbox-item$row[meal_id]". ' class='."item".'>';
          echo '<input type= "checkbox" name='. "$i".' value='. "$row[meal_id]". ' id='."checkbox-item$row[meal_id]". '>' ?>

          <div class="item-left">
            <div class="item-img">
              <img src="img/pizza.svg" alt="salad">
            </div>

            <div class="product">
              <div class="item-name">
                <?php
                  echo "$row[meal_name]";
              ?>
              </div>

              <div class="item-descr">
                <?php
                  echo "$row[meal_description]";
              ?>
              </div>
            </div>
          </div>

          <div class="item-right">
            <div class="item-price">
              <?php
                  echo "$row[meal_value]".'UAH';
              ?>
            </div>

            <div class="item-amount">
              <?php
                  echo "$row[meal_amount]";
              ?>
            </div>
          </div>
        </label>
        <?php
              }
      }
      ?>
      </div>

      <div class="items firstdish">

        <?php
      $result = mysqli_query($connection, "SELECT * FROM meals WHERE restraunt_id = 1 and meal_category = 4");
      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $i += 1;
          echo '<label for='."checkbox-item$row[meal_id]". ' class='."item".'>';
          echo '<input type= "checkbox" name='. "$i".' value='. "$row[meal_id]". ' id='."checkbox-item$row[meal_id]". '>' ?>

          <div class="item-left">
            <div class="item-img">
              <img src="img/soup.svg" alt="salad">
            </div>

            <div class="product">
              <div class="item-name">
                <?php
                  echo "$row[meal_name]";
              ?>
              </div>

              <div class="item-descr">
                <?php
                  echo "$row[meal_description]";
              ?>
              </div>
            </div>
          </div>

          <div class="item-right">
            <div class="item-price">
              <?php
                  echo "$row[meal_value]".'UAH';
              ?>
            </div>

            <div class="item-amount">
              <?php
                  echo "$row[meal_amount]";
              ?>
            </div>
          </div>
        </label>
        <?php
              }
      }
      ?>
      </div>
      <div class="footer-menu">
        <div class="container">
          <ul>
            <li><a href="#"><img src="img/menu/user.svg" alt=""></a></li>
            <li><a href="#"><img src="img/menu/options.svg" alt=""></a></li>
            <li><a href="#"><img src="img/menu/loupe.svg" alt=""></a></li>
            <li><a href="#"><img src="img/menu/keyboard-right-arrow-button.svg" alt=""></a></li>
            <li><a href="#" onclick="openCart();"><img src="img/menu/shopping-cart.svg" alt=""></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-cart"></div>
    <div class="cart animated fadeInUp">
      <div class="item">
          <div class="item-left">
            <div class="item-img">
              <img src="img/cocktails.svg" alt="salad">
            </div>

            <div class="product">
              <div class="item-name">
                Еспрессо, американо
              </div>

              <div class="item-descr">
                Довільна кількість мл.
              </div>
            </div>
          </div>

          <div class="item-right">
            <div class="item-price">
              15UAH
            </div>

            <div class="item-amount">
              ml
            </div>
          </div>
      </div>

      <div class="item">
          <div class="item-left">
            <div class="item-img">
              <img src="img/cocktails.svg" alt="salad">
            </div>

            <div class="product">
              <div class="item-name">
                Еспрессо, американо
              </div>

              <div class="item-descr">
                Довільна кількість мл.
              </div>
            </div>
          </div>

          <div class="item-right">
            <div class="item-price">
              15UAH
            </div>

            <div class="item-amount">
              ml
            </div>
          </div>
      </div>

      <div class="item">
          <div class="item-left">
            <div class="item-img">
              <img src="img/cocktails.svg" alt="salad">
            </div>

            <div class="product">
              <div class="item-name">
                Еспрессо, американо
              </div>

              <div class="item-descr">
                Довільна кількість мл.
              </div>
            </div>
          </div>

          <div class="item-right">
            <div class="item-price">
              15UAH
            </div>

            <div class="item-amount">
              ml
            </div>
          </div>
      </div>

      <div class="item">
          <div class="item-left">
            <div class="item-img">
              <img src="img/cocktails.svg" alt="salad">
            </div>

            <div class="product">
              <div class="item-name">
                Еспрессо, американо
              </div>

              <div class="item-descr">
                Довільна кількість мл.
              </div>
            </div>
          </div>

          <div class="item-right">
            <div class="item-price">
              15UAH
            </div>

            <div class="item-amount">
              ml
            </div>
          </div>
      </div>

      <div class="item">
          <div class="item-left">
            <div class="item-img">
              <img src="img/cocktails.svg" alt="salad">
            </div>

            <div class="product">
              <div class="item-name">
                Еспрессо, американо
              </div>

              <div class="item-descr">
                Довільна кількість мл.
              </div>
            </div>
          </div>

          <div class="item-right">
            <div class="item-price">
              15UAH
            </div>

            <div class="item-amount">
              ml
            </div>
          </div>
      </div>
    </div>
    <div class="container-submit animated fadeInUp delay-1s">
      <a href="#" class="cart-submit">Заказать - <span>400</span> грн</a>
      <input type="submit">
    </div>
    </form>
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>

</body>

</html>
