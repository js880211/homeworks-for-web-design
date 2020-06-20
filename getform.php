<?php
// define variables and set to empty values
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $names = $_POST["checkbox"];
  foreach($names as $name){
      echo $name."<br>";
  }
}


?>