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
  <nav class="navbar bg-dark navbar-dark">
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
  <div class="container">
    <h1 class="text-success">WEB DESIGN Main Page</h1>
    <h3>全球資訊網頁設計 期末演習</h3>
    <hr class="style1">
    <div class="dropdown">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        動畫年份表
      </button>
      <div class="dropdown-menu" id="menu">
      </div>
      <form id="cols">
        
      </form>
    </div>
  </div>
  <script src="mainpage.js">
  </script>
</body>

</html>