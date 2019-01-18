<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
    <title>delete</title>
</head>
<style>

    body, html {
      height: 100%;


    }

    .container {
      position: absolute;
      right: 0;
      margin: 70px;
      max-width: 500px;
      padding: 20px;
      background-color: #f2f2f2;
      background: rgb(0, 0, 0);
      background: rgba(0, 0, 0, 0.5);
      color: #f1f1f1;

    }


    input[type=text], select {
      width: 100%;
      padding: 12px 20px ;
      margin: 8px 0  ;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      background-color: #f2f2f2;

    }



    button[type=reset] {
      width: 100%;
      background-color: #f44336;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;

    }

    button[type=reset]:hover {
      background-color:#e60000;
    }
    .container {
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
      color: white;
      font-weight: bold;

      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      width: 80%;
      padding: 20px;

    }
    table {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;

    }
    </style>

<body>
<center>
        <div class="header">
            <!-- Table1 -->
        <table>
        <form name="insert" action="delete.php" method="POST">
           <h3>News1</h3>
                <tr>
                    <td><label>Title</label></td>
                    <td><input type="text" name="title" placeholder="Title" required>

                </tr>

                <tr>
                  <td></td>
                  <td>  <button type="reset">Delete</button></td>
                </tr>
            </form>
        </table>
          <!-- Table 1 php -->
        <?php

        $Title = $_POST["title"];


        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "news";

        $con = mysqli_connect($server,$username,$password,$db);

        if(!$con)
        {
            die("Connection Error ".mysqli_connet_error());
        }

        echo("Connected Successfuly <br>");

        $sql = "DELETE FROM title1 WHERE Title = '$Title'";

        if(mysqli_query($con,$sql))
        {
            echo ("Record has been Updated <br>");
        }
        else
        {
            echo("Error: ".$sql."<br>".mysqli_error($con));
        }

        mysqli_close($con);
        ?>
  
    </center>


</body>
</html>
