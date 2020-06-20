<?php
// define variables and set to empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $names = $_POST["checkbox"];
  foreach($names as $name){
      echo $name."<br>";
  }
}


?>
<html>
    <head>

    </head>
    <body>
        <script>
            gapi.client.sheets.spreadsheets.create({
            properties: {
                title: title
            }
            }).then((response) => {
            });
        </script>
    </body>
</html>