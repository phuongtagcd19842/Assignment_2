<html>
  <head>
    <link rel="stylesheet" href ="styles.css">
    <title> ATN Shop </title>
    <marquee bgcolor="gray" 
             scrollamount="12" 
             direction="left" 
             onmouseover="this.stop();" 
             onmouseout="this.start();">
        [2/27/2021]: Remember to check the database everyday!
		<?php
		$date = getdate();
			echo "<pre>";
			print_r($date);
			echo "</pre>";
			echo "<hr>";
			echo "Today is: ".$date['weekday']."Day: ".$date['mday']."Month: ".$date['mon']."Year: ".$date['year']."Hours: ".$date['hours']."Minutes: ".$date['minutes']."Seconds: ".$date['seconds'];
		?>
    </marquee>
    <ul> 
        <li> <a href="">Main Page</a></li>
        <li> <a href="login.php">Login </a></li>        
    </ul>
  </head>
    <body>
      <style>
        body {
          background-image: url('background.jpg');
          background-attachment: fixed;
          background-size: 100%100%;
        } 
      </style>
    </body>
</html>
