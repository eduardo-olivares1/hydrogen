<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Recent Feedback</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/hydrogen-custom.css" rel="stylesheet">
<!-- Custom Font -->
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Navigation bar -->
<nav class="navbar navbar-inverse navbar-static-top">

  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsedNav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="collapsedNav">
      <ul class="nav navbar-nav">
        <li>                                                                                                                                      <a href="index.html">Home</a></li>
        <li><a href="#">Products</a></li>
      <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Our Team</a></li>
        <li><a href="#">Location</a></li>
      </ul>
      </li>
      <li><a href="rate-us.html">Feedback</a></li>
      </ul>
    </div>


  </div>
</nav>
<div class="container" style="padding-top:3%">
    <p style = "font-size:2em;">Recent Feedback</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th> Name </th>
                <th> Email </th>
                <th> Phone </th>
                <th> Service </th>
                <th> Message </th>
                <th> Score </th>
            </tr>
        </thead>
        <tbody>
            <?php
            error_reporting(0);
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $service=$_POST['service'];
            $message=$_POST['message'];
            $score=$_POST['score'];

            $connectionstring = mysql_connect('localhost', 'root', '' )
            	or die('Could not connect: ' . mysql_error());
           	mysql_select_db('feedback')
           		or die('Could not connect: ' . mysql_error());

           	$query='SELECT * FROM `feedback` WHERE 1';

            $queryexe=mysql_query($query)
            	or die('Could not query database:' . mysql_error());

             while($dataArray = mysql_fetch_array($queryexe, MYSQL_ASSOC))
             	{
                echo "<tr>\n";
                foreach ($dataArray as $col_value) {
                echo "\t<td>$col_value</td>\n";
                }
                echo "</tr>\n";
                }

                $insert = "INSERT INTO `feedback`(`Name`, `Email`, `Phone`, `Service`, `Message`,`Score`)VALUES('$name','$email','$phone','$service','$message','$score')";

                $result = mysql_query($insert)
                	or die('Could not insert into database:' . mysql_error());

                mysql_free_result($queryexe)
                	or die('Could not free result:' . mysql_error());

                mysql_close($connectionstring)
                	or die ('Could not close database:' . mysql_error());

            ?>
        </tbody>
    </table>
    </div>

<script src="js/date-time.js"></script>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
    </html>
