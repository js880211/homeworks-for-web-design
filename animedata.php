<?php
header("Content-Type:text/html; charset=utf-8");
$servername = "10.55.144.3";
$username = "root";
$password = "js880211";
try {
    $conn = new PDO("mysql:host=$servername;dbname=AnimeTable;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
function gentable($year){
    global $conn;
    echo "<form><table class='table'> <tr> 
    <th class='bg-dark text-light'>名稱</th> 
    <th class='bg-dark text-light'>年分</th> 
    <th class='text-light bg-dark'>月份</th> 
    <th class='bg-dark text-light'>看過</th> </tr>";
    $sql = "Select * FROM Anime WHERE year=$year";
    $db = $conn->query($sql);
    $dbs = $db->fetchAll(PDO::FETCH_NUM);
    $id=0;
    foreach ($dbs as $row) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td><td>"."<input type='radio' id='$id'>"."</td>";
        echo "</tr>";
        $id++;
    }
    echo "</table></form>";
}

if($_GET["g"]==1){
    global $conn;
    $sql="SELECT DISTINCT year FROM Anime";
    $db = $conn->query($sql);
    $dbs = $db->fetchAll(PDO::FETCH_NUM);
    $arr=array();
    foreach($dbs as $row){
        array_push($arr,$row[0]);
    }
    echo json_encode($arr);
}
if($_GET["q"]!=""){
    gentable($_GET["q"]);
}
    
  /*  echo "<table class='table'> <tr> <th class='bg-dark text-light'>名稱</th> <th class='bg-dark text-light'>年分</th> <th class='text-light bg-dark'>月份</th> </tr>";
    $sql = "Select * from Anime";
    $db = $conn->query($sql);
    $dbs = $db->fetchAll(PDO::FETCH_NUM);
    foreach ($dbs as $row) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td>";
        echo "</tr>";
    }
    echo "</table>";*/
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
