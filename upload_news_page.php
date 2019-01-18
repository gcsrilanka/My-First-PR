<html>
<head>
<title>data collector</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.bg-img {
  background-image: url("image 8.jpg");
  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
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
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #f2f2f2;

}

input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #f2f2f2;

}

input[type=file], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: #45a049;
}

table {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body class="bg-img">


    <table class="container">
    <form action="" method="POST" enctype="multipart/form-data" >


    <tr>
    <td><b>Reporter Name</b></td>
    <td><input type="text" name="Rname" placeholder="Enter your name"></td>
    </tr>

    <tr>
    <td><b>Date</b></td>
    <td><input type="date" name="date" value=""></td>
    </tr>

    <tr>
    <td>Title</td>
    <td><input type="text"  name="title" placeholder="Enter Title"></td>
    </tr>

    <tr>
    <td><b>Description</b></td>
    <td><input type="text"  name="info" placeholder="Enter Title"></td>
    </tr>

    <tr>
    <td><b>Image</b></td>
    <td><input type="file"  name="fileToUpload" ></td>

    </tr>

    <tr>
    <td><b>Article</b></td>
    <td><input type="text"  name="art" placeholder="Enter Title"></td>
    </tr>

    <tr>
    <td><button type="submit" >submit</button></td>
    </tr>
    </form>
    </table>
    <?php
    $title="";
    $description="";
    $image="";
    $date="";
    $article="";
    $reporter="";


if(isset($_POST['title']))
{
    $title = $_POST["title"];
    $description = $_POST["info"];
    $image = $_POST["fileToUpload"];
    $date = $_POST["date"];
    $article = $_POST["art"];
    $reporter = $_POST["Rname"];
}

    $server= "localhost";
    $username="root";
    $password="";
    $db="News";

    $con=mysqli_connect($server,$username,$password,$db);

    if(!$con)
    {
      die("Connection error".mysqli_connect_error());
    }

    else
     {
      echo("Connected Successfully <br>");
     }

    $sql="INSERT INTO title1 VALUES('$title','$description','$image','$date','$article','$reporter')";

    if(mysqli_query($con,$sql))
    {
      echo"New Record Entered Successfully <br>";
    }
    else
    {
      echo"Error:".$sql."<br>".mysqli_error($con);
    }


    mysqli_close($con);
    ?>
</body>
</html>
