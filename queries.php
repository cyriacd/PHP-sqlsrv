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
          $connectionInfo = array("UID"=>"sa", "PWD"=>"qwertyuiop", "Database"=>"REALESTATE");
          $conn = sqlsrv_connect( $serverName, $connectionInfo);

        echo "<p>Union Query</p>";
        echo "<p>List all the names of gas and water companies and their corresponding prices</p>";
        echo "<p>SELECT Name,Price FROM GAS<br/>
                UNION ALL<br/>
                SELECT Name,Price FROM WATER;</p>";
        $sql ="SELECT Name,Price FROM GAS
              UNION ALL
              SELECT Name,Price FROM WATER;";
        $stmt =  sqlsrv_query( $conn, $sql);    
        echo"<table class=\"hoverable highlight\"><thead><tr>";     
        foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
            foreach( $fieldMetadata as $name => $value) {
              if($name === "Name"){
                echo "<th data-field='$value'>$value</th>";
                break;
              }
            }
          }
        echo "</tr></thead><tbody>";
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
              echo "<tr><td>".$row['Name']."</td><td>".$row['Price']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";


        echo "<p>Intersect Query</p>";
        echo "<p>List all the companies that are provide both electricity and gas</p>";
        echo "<p>SELECT Name FROM GAS<br/>
                INTERSECT<br/>
                SELECT Name FROM ELECTRICITY;</p>";
        $sql ="SELECT Name FROM GAS
                INTERSECT
                SELECT Name FROM ELECTRICITY;";
        $stmt =  sqlsrv_query( $conn, $sql);    
        echo"<table class=\"hoverable highlight\"><thead><tr>";     
        foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
            foreach( $fieldMetadata as $name => $value) {
              if($name === "Name"){
                echo "<th data-field='$value'>$value</th>";
                break;
              }
            }
          }
        echo "</tr></thead><tbody>";
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
              echo "<tr><td>".$row['Name']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";


        echo "<p>Difference Query</p>";
        echo "<p>List all the roommates that are not tenants
  Notes: “roommates” contain all the people who lease the properties, “tenant” is the list of people in each property that collect roommates’ rent.</p>";
        echo "<p>SELECT * FROM ROOMMATE
                WHERE ROOMMATE.RoommateID NOT IN
                  (SELECT TenantID FROM TENANT);</p>";
        $sql ="SELECT * FROM ROOMMATE
                WHERE ROOMMATE.RoommateID NOT IN
                  (SELECT TenantID FROM TENANT);";
        $stmt =  sqlsrv_query( $conn, $sql);    
        echo"<table class=\"hoverable highlight\"><thead><tr>";     
        foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
            foreach( $fieldMetadata as $name => $value) {
              if($name === "Name"){
                echo "<th data-field='$value'>$value</th>";
                break;
              }
            }
          }
        echo "</tr></thead><tbody>";
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
              echo "<tr><td>".$row['RoommateID']."</td><td>".$row['TenantID']."</td><td>".$row['Name']."</td><td>".$row['Gender']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";


        echo "<p>Division Query</p>";
        echo "<p>List all the investors that invest all the branches</p>";
        echo "<p>SELECT * FROM INVESTOR
              WHERE INVESTOR.InvestorID NOT IN (
                SELECT InvestorID FROM INVESTOR
                WHERE INVESTOR.InvestorID NOT IN
                  (SELECT InvestorID from INVEST));</p>";
        $sql ="SELECT * FROM INVESTOR
          WHERE INVESTOR.InvestorID NOT IN (
            SELECT InvestorID FROM INVESTOR
            WHERE INVESTOR.InvestorID NOT IN
              (SELECT InvestorID from INVEST));";
        $stmt =  sqlsrv_query( $conn, $sql);    
        echo"<table class=\"hoverable highlight\"><thead><tr>";     
        foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
            foreach( $fieldMetadata as $name => $value) {
              if($name === "Name"){
                echo "<th data-field='$value'>$value</th>";
                break;
              }
            }
          }
        echo "</tr></thead><tbody>";
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
              echo "<tr><td>".$row['InvestorID']."</td><td>".$row['Name']."</td><td>".$row['Amount']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";


        echo "<p>Aggergation Query</p>";
        echo "<p>Count all the properties under branch 001</p>";
        echo "<p>select count(PropertyID)
                from PROPERTY
                where BranchID = 'B001';</p>";
        $sql ="select count(PropertyID)
              from PROPERTY
              where BranchID = 'B001';";
        $stmt =  sqlsrv_query( $conn, $sql);    
        echo"<table class=\"hoverable highlight\"><thead><tr>";     
                echo "<th data-field='B001'>Branch B001 numer of properties</th>";

        echo "</tr></thead><tbody>";
        $name = sqlsrv_get_field( $stmt, 0);
              echo "<tr><td>2".$name."</td></tr>";
        echo "</tbody></table><br/><br/>";

              echo "<p>Inner Join Query</p>";
        echo "<p>List all the properties and its corresponding prices that are in rank A.</p>";
        echo "<p>SELECT PROPERTY.PropertyID, RENTGRADE.Rent
              FROM PROPERTY
              INNER JOIN RENTGRADE
              ON PROPERTY.RentGrade = RENTGRADE.Grade AND RENTGRADE.Rent > 40000;</p>";
        $sql ="SELECT PROPERTY.PropertyID, RENTGRADE.Rent
              FROM PROPERTY
              INNER JOIN RENTGRADE
              ON PROPERTY.RentGrade = RENTGRADE.Grade AND RENTGRADE.Rent > 40000;";
        $stmt =  sqlsrv_query( $conn, $sql);    
        echo"<table class=\"hoverable highlight\"><thead><tr>";     
        foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
            foreach( $fieldMetadata as $name => $value) {
              if($name === "Name"){
                echo "<th data-field='$value'>$value</th>";
                break;
              }
            }
          }
        echo "</tr></thead><tbody>";
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
              echo "<tr><td>".$row['PropertyID']."</td><td>".$row['Rent']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";


              echo "<p>Outer Join Query</p>";
        echo "<p>List all the properties that is owned by each branches</p>";
        echo "<p>select BRANCH.BranchID, PROPERTY.PropertyID
FROM BRANCH
FULL OUTER JOIN PROPERTY
ON BRANCH.BranchID = PROPERTY.BranchID</p>";
        $sql ="select BRANCH.BranchID, PROPERTY.PropertyID
              FROM BRANCH
              FULL OUTER JOIN PROPERTY
              ON BRANCH.BranchID = PROPERTY.BranchID;";
        $stmt =  sqlsrv_query( $conn, $sql);    
        echo"<table class=\"hoverable highlight\"><thead><tr>";     
        foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
            foreach( $fieldMetadata as $name => $value) {
              if($name === "Name"){
                echo "<th data-field='$value'>$value</th>";
                break;
              }
            }
          }
        echo "</tr></thead><tbody>";
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
              echo "<tr><td>".$row['BranchID']."</td><td>".$row['PropertyID']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";

        sqlsrv_free_stmt( $stmt);
          ?>
        </p>
      </div>
      <div class="card-action">
        <a href="creattables.php">Next: Queries</a>
      </div>
    </div>
  </div>
</body>
 </html>
