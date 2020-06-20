<?php
// define variables and set to empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST["checkbox"];
    foreach ($names as $name) {
        echo $name . "<br>";
    }
}
?>
<html>

<head>

</head>

<body>
    <script>
        async defer src = "https://apis.google.com/js/api.js"
        onload = "this.onload=function(){};handleClientLoad()"
        onreadystatechange = "if (this.readyState === 'complete') this.onload()" >
            gapi.client.sheets.spreadsheets.create({
                properties: {
                    title: title
                }
            }).then((response) => {});
    </script>
</body>

</html>