<?php
// define variables and set to empty values
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["checkbox"];
  echo $name;
}


?>