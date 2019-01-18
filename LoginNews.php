<html>
<title>
    Login_News_page
</title>
    <head>
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

    <script>
    function Comform()
    {
        var pw = document.forms["signup"]["pwd"].value;
        var cpw = document.forms["signup"]["cpwd"].value;

        if(pw!=cpw)
        {
            alert("password not matching. please enter the password again");
            return false;
        }
    }
    </script>
    </head>

    <body>
      
      <table class="container">
      <form name="signup" action="signup.php" method="POST" onsubmit="return value">

          <tr>
          <td><b>User Name</b></td>
          <td><input type="text" name="uname" placeholder="User Name" value="" required></td>
          </tr>

          <tr>
          <td><b>Email</b></td>
          <td><input type="text" name="Email" placeholder="Enter your email" value="" required></td>
          </tr>


          <tr>
          <td><b>Password</b></td>
          <td><input type="text" name="pwd" placeholder="Enter Password" value="" required> </td>
          </tr>

          <tr>
          <td><b>Confirm Password</b></td>
          <td><input type="text" name="cpwd" placeholder="Re-Enter Password" value="" required></td>
          </tr>

          <tr>
          <td><button type="submit" >Sign Up</button></td>
          <td><button type="reset"  >Reset</button></td>
          </tr>

      </form>
    </table>


      <?php
      $UName="";
      $Email="";
      $Pass="";
      $CPass="";


  if(isset($_POST['pwd']))
  {
      $UName = $_POST["uname"];
      $Email = $_POST["Email"];
      $Pass = $_POST["pwd"];
      $CPass = $_POST["cpwd"];
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

      $sql="INSERT INTO signup VALUES('$UName','$Email','$Pass','$CPass')";

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
