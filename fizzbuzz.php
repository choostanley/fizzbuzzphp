<!DOCTYPE html>
<html>
  <head>
    <title>FizzBuzz!</title>
  </head>
  <body>
    <?php
      for($x = 1; $x < 101; $x++) {
    	if ($x % 3 == 0 && $x % 5 == 0) {
    		echo "FizzBuzz";
    	}elseif ($x % 5 == 0) {
    		echo "Buzz";
    	}elseif ($x % 3 == 0) {
    		echo "Fizz";
    	}else {
    		echo "$x";
    	}
    echo "<br>";
	}
    ?>    
  </body>
</html>