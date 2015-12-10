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

        echo "<p>Table GAS</p>";
        $sql ="SELECT * FROM GAS;";
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

        echo "<p>Table ELECTRICITY</p>";
        $sql ="SELECT * FROM ELECTRICITY;";
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
 
        echo "<p>Table INTERNETCABLE</p>";
        $sql ="SELECT * FROM INTERNETCABLE;";
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
          
        echo "<p>Table WATER</p>";
        $sql ="SELECT * FROM WATER;";
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
          
        echo "<p>Table BRANCH</p>";
        $sql ="SELECT * FROM BRANCH;";
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
              echo "<tr><td>".$row['BranchID']."</td><td>".$row['Location']."</td><td>".$row['NoProperties']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";
         
          
        echo "<p>Table INSURANCE</p>";
        $sql ="SELECT * FROM INSURANCE;";
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
              echo "<tr><td>".$row['InsuranceID']."</td><td>".$row['Name']."</td><td>".$row['InsuranceType']."</td><td>".$row['Price']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";

        echo "<p>Table INSURANCE</p>";
        $sql ="SELECT * FROM INSURANCE;";
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
              echo "<tr><td>".$row['InsuranceID']."</td><td>".$row['Name']."</td><td>".$row['InsuranceType']."</td><td>".$row['Price']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";
        
          
        echo "<p>Table TOWING</p>";
        $sql ="SELECT * FROM TOWING;";
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


        echo "<p>Table MAINTENANCE</p>";
        $sql ="SELECT * FROM MAINTENANCE;";
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
              echo "<tr><td>".$row['MaintenanceID']."</td><td>".$row['Name']."</td><td>".$row['Phone']."</td><td>".$row['Price']."</td><td>".$row['Rating']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";
          
        echo "<p>Table REMODELLING</p>";
        $sql ="SELECT * FROM REMODELLING;";
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
              echo "<tr><td>".$row['RemodelNo']."</td><td>".$row['Detail']."</td><td>".$row['Price']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";
        sqlsrv_free_stmt( $stmt);


        echo "<p>Table MANAGER</p>";
        $sql ="SELECT * FROM MANAGER;";
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
              echo "<tr><td>".$row['ManagerID']."</td><td>".$row['BranchID']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";

        echo "<p>Table RENTGRADE</p>";
        $sql ="SELECT * FROM RENTGRADE;";
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
              echo "<tr><td>".$row['Grade']."</td><td>".$row['Rent']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";


        echo "<p>Table INVESTOR</p>";
        $sql ="SELECT * FROM INVESTOR;";
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

        echo "<p>Table TENANT</p>";
        $sql ="SELECT * FROM TENANT;";
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
              echo "<tr><td>".$row['TenantID']."</td><td>".$row['PropertyID']."</td><td>".$row['ICName']."</td><td>".$row['Rent']."</td><td>".$row['Rentperperson']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";

        echo "<p>Table ROOMMATE</p>";
        $sql ="SELECT * FROM ROOMMATE;";
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


        echo "<p>Table PROPERTY</p>";
        $sql ="SELECT * FROM PROPERTY;";
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
              echo "<tr><td>".$row['PropertyID']."</td><td>".$row['GasName']."</td><td>".$row['ElectricityName']."</td><td>".$row['WaterName']."</td><td>".$row['BranchID'].
              "</td><td>".$row['InsuranceID']."</td><td>".$row['TowingName']."</td><td>".$row['MaintenanceID']."</td><td>".$row['RemodelNo']."</td><td>".$row['RentGrade'].
              "</td><td>".$row['Max_tenants']."</td><td>".$row['Cost']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";

        echo "<p>Table EMPLOYEE</p>";
        $sql ="SELECT * FROM EMPLOYEE;";
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
              echo "<tr><td>".$row['ID']."</td><td>".$row['ManagerID']."</td><td>".$row['Salary']."</td><td>".$row['Name']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";


        echo "<p>Table INVEST</p>";
        $sql ="SELECT * FROM INVEST;";
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
              echo "<tr><td>".$row['InvestorID']."</td><td>".$row['BranchID']."</td><td>".$row['Amount']."</td></tr>";
        }
        echo "</tbody></table><br/><br/>";



        sqlsrv_free_stmt( $stmt);
             sqlsrv_close($conn);
        
          ?>
        </p>
      </div>
      <div class="card-action">
        <a href="queries.php">Next: Queries</a>
      </div>
    </div>
  </div>
</body>
 </html>
