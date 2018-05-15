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

  <section class="carousel-default">
    <div id="carousel-fixed-height" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
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

            $i = 0;
             while($dataArray = mysql_fetch_array($queryexe, MYSQL_ASSOC))
             	{

                if ($i ==0){
                    echo "<div class='item active'>
          <div class='slider-size'>
            <div class='carousel-caption'>
                <blockquote>".$dataArray["Message"]."</blockquote>
                <cite>-".$dataArray["Name"]."</cite>
                <br>
                <cite>Score Given: ".$dataArray["Score"]."</cite>
                <br>
                <cite>Service Used: ".$dataArray["Service"]."</cite>
            </div>
          </div>
        </div>";
                }else{
                    echo "<div class='item'>
          <div class='slider-size'>
            <div class='carousel-caption'>
                <blockquote>".$dataArray["Message"]."</blockquote>
                <cite>-".$dataArray["Name"]."</cite>
                <br>
                <cite>Score Given: ".$dataArray["Score"]."</cite>
                <br>
                <cite>Service Used: ".$dataArray["Service"]."</cite>
            </div>
          </div>
        </div>";;
                }
                  $i++;
                }

                $insert = "INSERT INTO `feedback`(`Name`, `Email`, `Phone`, `Service`, `Message`,`Score`)VALUES('$name','$email','$phone','$service','$message','$score')";

                $result = mysql_query($insert)
                	or die('Could not insert into database:' . mysql_error());

                mysql_free_result($queryexe)
                	or die('Could not free result:' . mysql_error());

                mysql_close($connectionstring)
                	or die ('Could not close database:' . mysql_error());
    ?>
      </div>
      <a class="left carousel-control" href="#carousel-fixed-height" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-fixed-height" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

<div class="container" style="padding-top:3%">
    <div class="row">
                   <div class="col-lg-12">
                <h3 class="text-center">Want to say more? Contact us!</h3>
            </div>

    </div>


    <div class="row">
        <div class="col-md-12 text-center">
            <h5>5555 Fake Street</h5>
            <h5>San Francisco, California 1234</h5>
            <h5>Phone:<a href="tel:5555555555"> (555)-555-5555</a></h5>
            <h5>Email:<a href="mailto:fake@fakeemail.com"> fake@fakeemail.com</a></h5>
        </div>
    </div>

    </div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
