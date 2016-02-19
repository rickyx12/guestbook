<?php

class db {

private $host;
private $username;
private $password;
private $database;

public function __construct() {
$this->host = $_SERVER['DB_HOST'];
$this->username = $_SERVER['DB_USER'];
$this->password = $_SERVER['DB_PASS'];
$this->database = $_SERVER['DB_DB']; 
}


public function addGuest($name,$subject,$message) {
$sql = new mysqli($this->host,$this->username,$this->password,$this->database);
$query = "insert into guestbook(name,subject,message,date) values('".mysqli_real_escape_string($sql,$name)."','".mysqli_real_escape_string($sql,$subject)."','".mysqli_real_escape_string($sql,$message)."',NOW())";
$sql->query($query);
$sql->close();
}


public function showGuest() {
$connection = mysqli_connect($this->host,$this->username,$this->password,$this->database);      
$result = mysqli_query($connection, " select name,subject,message,date from guestbook order by date desc ") or die("Query fail: " . mysqli_error()); 
while($row = mysqli_fetch_array($result))
{
echo "<Br><div style='border:1px solid #000; width:50%;'>";
echo "&nbsp;".$row['name'];
echo "<br>&nbsp;".$row['date'];
echo "<Br>&nbsp;".$row['message'];
echo "</div>";
}
}

}

?>
