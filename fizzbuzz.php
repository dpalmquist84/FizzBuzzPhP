<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>FizzBuzz PHP</title>
  </head>
  <body>
<?php
   for ($i = 1; $i <= 100; $i++) {
  
     if  ($i % 3 == 0 && $i %5 == 0) {
      echo "FizzBuzz {$i} <br />";
     }
     elseif ($i % 3 == 0) {
       echo "Fizz {$i} <br />";
     } else if ($i % 5 == 0) {
       echo "Buzz {$i} <br />";
     } else {
       echo "{$i} <br />";
     }
     

}
    ?>
    

  </body>
</html>
