<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
    <title>feedback List</title>
    <style type = "text/css">
        body {
            font-family:tahoma, helvetica, arial, sans-serif
        }
        table,tr,td,th {
            text-align:center;
            font-size: .9em;
            border:3px groove;
            padding:5px;
            background-color:#ddddd;
        }
    </style>
</head>
<body>

    <p style = "font-size:2em;">feedback List</p>
    <table>
        <thead>
            <tr>
                <th style = "width:100px;"> Name </th>
                <th style = "width:200px;"> Feedback </th>
                <th style = "width:50px;"> Score </th>
                <th style = "width:100px;"> Service</th>
            </tr>
        </thead>
        <tbody>
            <?php
            error_reporting(0);
            $name=$_POST['name'];
            $feedback=$_POST['feedback'];
            $score=$_POST['score'];
            $service=$_POST['service'];


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

                $insert = "INSERT INTO `feedback`(`Name`, `Feedback`, `Score`, `Service`)VALUES('$name','$feedback','$score','$service')";

                $result = mysql_query($insert)
                	or die('Could not insert into database:' . mysql_error());

                mysql_free_result($queryexe)
                	or die('Could not free result:' . mysql_error());

            ?>
        </tbody>
    </table>
</body>
    </html>
