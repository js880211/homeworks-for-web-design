<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>WWW WEB Design</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div id="loading">
          <H1>Now loading...</H1>
        </div>
            <div class="container">
                <nav class="navbar  bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">網頁連結</a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="./threejs/mainscene.html">threejs</a>
                  <a class="nav-link" href="./gallery/index.html">gallery</a>
                </li>
               
              </ul>
            </div>
          </nav>
                <h1 class="text-success">WEB DESIGN Main Page</h1>
                <h3>全球資訊網頁設計 連結頁</h3>
                <hr class="style1">
                <?php
                header("Content-Type:text/html; charset=utf-8");
                $servername = "10.55.144.3";
                $username = "root";
                $password = "js880211";
                try{
                        $conn = new PDO("mysql:host=$servername;dbname=AnimeTable;charset=utf8",$username,$password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                        echo "Conn SUCCESS <br>";
                        $sql = "Select * from Anime";
                        $db=$conn->query($sql);
                        $dbs=$db->fetchAll(PDO::FETCH_COLUMN);
                        
                        foreach($dbs as $row)
                        {

                        echo $row."<br>";
                        echo $row[0];
                        }
                }catch(PDOException $e){
                        echo "Connection failed: ".$e->getMessage();
                }
                $conn = null;
                ?>
            </div>
      
        
    <script src="mainpage.js"></script>
    </body>
</html>