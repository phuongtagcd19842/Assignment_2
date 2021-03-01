<html>
  <head>
    <link rel="stylesheet" href ="styles.css">
    <title> ATN Shop </title>
    <marquee bgcolor="gray" 
             scrollamount="6" 
             direction="left" 
             onmouseover="this.stop();" 
             onmouseout="this.start();">
		<?php
		$date = getdate();
			echo "<hr>";
			echo "Today is: ".$date['weekday']."--".$date['mday']."/".$date['mon']."/".$date['year']."--".$date['hours'].":".$date['minutes'].":".$date['seconds'];
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
