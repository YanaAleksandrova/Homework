<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homework_1</title>
</head>

<body>
    <form action="" method="get">
   <label for="number">The number is(Greater than 2) :</label>
   <input type="text" name="number"/>
   <input type="submit" value="Submit" />
  </form>
<?php
	 
        function is_prime_number($num) {
		 if($num==1 || $num==0) {return (false);}
            for($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return (false);
                } 
            }
            
            return (true);
        }

error_reporting(E_ERROR);		
 $number = $_GET['number'];
 if($number == '') echo '<div style="color:red">"Empty field!"</div>';
 else
 {     
	 
		if( !is_numeric($number) ) echo '<div style="color:red"> "The parameter is not a number" </div>';
		else 
		{		 
			if( !($number >= 0 && $number <= 19999) ) echo '<div style="color:red"> "The parameter is not within the range [0;19999]"</div>';
			else
			{
				if (is_prime_number($number)) echo '<div style="color:black">"The number  '.$number.' is prime"</div>';
				else echo '<div style="color:blue">"The number '.$number.' is NOT prime" </div>';
			}
		}
  }
  
   
 ?>
</body>
</html>