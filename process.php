<?php

$user = "caux";
$password = "caux";
$database = "caux";
$table = "TEST";
$conn= new PDO("pgsql:host=192.168.40.132;dbname=$database", $user, $password);



try {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city_name = $_POST['city_name'];
    $email = $_POST['email'];
    $conn = new PDO("pgsql:host=192.168.40.132;dbname=$database", $user, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO employee (first_name,last_name,city_name,email) VALUES ('$first_name', '$last_name','$city_name','$email')";
    $conn->exec($sql);
    echo "Nous avons bien engistrer votre demande";
    }
catch(PDOException $e)
    {

        echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <title>Test</title> 

<li style='font-size:18px;'><a href='logout.php?logout-submit=logout'>Logout</a></li>


  </body>
</html>
