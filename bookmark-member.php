

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="1;url=bookmarks.php" />
  </head>
  <body>
    <?php
      $car_park = $GET['car_park'];
      if(!isset($_SESSION['bookmarks']))
      {
        $bookmarksArr = array();
        $_SESSION['bookmarks'] = $bookmarksArr;
      }
      array_push($_SESSION['bookmarks'],$car_park);
    ?>
  </body>
</html>
