<!DOCTYPE html>
<center><html>
  <body>
	<form method="post" action="process.php">
		<img src="https://imageio.forbes.com/specials-images/imageserve/60f1e792c7e89f933811814c/DevOps-concept/960x0.jpg?format=jpg&width=960" alt="Simply Easy Learning" width="220" height="150">
		<title>Formation DEVOPS</title>
                <h1 style="background-color:rgba(255, 99, 71, 0.5);">Formation DEVOPS</h1>
		First name:<br>
		<input type="text" name="first_name" size="40">
		<br>
		Last name:<br>
		<input type="text" name="last_name" size="40">
		<br>
		City name:<br>
		<input type="text" name="city_name" size="40">
		<br>
		Email Id:<br>
		<input type="email" name="email"size="40"> 
		<br><br>
		<input type="submit" name="save" value="submit"><br><br>
	</form>
  </body>

<html>
  <body><center>

<?php
$user = "caux";
$password = "caux";
$database = "caux";
$table = "employee";

try {

 $db= new PDO("pgsql:host=192.168.40.132;dbname=$database", $user, $password);
  echo $t ."|". 'first_name' . "   |  " .  'last_name'. " |  " .'city_name'. " | ". 'email';
  foreach($db->query("SELECT * FROM $table") as $row) {
	 echo "<br>---------------------------------------------------------------------------|<br>";
         echo $t ."|".$row['first_name'] . "   |  " . $row['last_name']. " |  " .$row['city_name']. " | ". $row['email'];
  }
  
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

