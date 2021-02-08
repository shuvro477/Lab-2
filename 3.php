<html>
  <body>  
    <?php
	
    $a = 4; $b = 3;
    $Area = $a*$b;
    $Perimeter = 2*($a*$b);
	
    if ($a == $b)
	{
        echo "the shape is a square";
    }
    ?>
    <br>
    <?php
     echo "Area: $Area";
     ?>
	<br>

	<?php
		echo "Parameter:  $Perimeter";
	?>
  </body>
</html>