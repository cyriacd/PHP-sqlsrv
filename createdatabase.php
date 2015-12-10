<html>
<head>
  <title>CSE Database</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/materialize.min.css">

</head>
<body>

  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Real Estate</a>
        <ul class="right hide-on-med-and-down">
        </ul>
      </div>
    </nav>
  </div>

  <div class="container">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Real Estate Database</span>
        <p>
          
          <?php
          $serverName = "CYRIAC-PC\csedata";
          $connectionInfo = array("UID"=>"sa", "PWD"=>"qwertyuiop");
          $conn = sqlsrv_connect( $serverName, $connectionInfo);
          $sql = "CREATE DATABASE REALESTATE;";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
               die( print_r( sqlsrv_errors(), true));
          }
          if( $conn ) {
               echo "Connection established.";
          }else{
               echo "Connection could not be established.";
               die( print_r( sqlsrv_errors(), true));
          }

          ?>
        </p>
      </div>
      <div class="card-action">
        <a href="createtables.php">Next: Create Tables</a>
      </div>
    </div>
  </div>
</body>
 </html>

