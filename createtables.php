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
        <span class="card-title">Real Estate Database Tables</span>

          <?php
          $serverName = "CYRIAC-PC\csedata";
          $connectionInfo = array("UID"=>"sa", "PWD"=>"qwertyuiop", "Database"=>"REALESTATE");
          $conn = sqlsrv_connect( $serverName, $connectionInfo);
          $sql = "CREATE TABLE GAS(Name VARCHAR(15) NOT NULL UNIQUE,Price MONEY NOT NULL,Primary Key(Name));";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table GAS created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p> CREATE TABLE GAS
                     (Name VARCHAR(15) NOT NULL UNIQUE,
                      Price MONEY NOT NULL,
                      Primary Key(Name)
                );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
         
          $sql ="SELECT * FROM GAS;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";
          echo "<br/><br/><br/>";
          $sql = "CREATE TABLE ELECTRICITY
                  (
                  Name VARCHAR(15) NOT NULL UNIQUE,
                  Price MONEY NOT NULL,
                  Primary Key(Name)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table ELECTRICITY created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE ELECTRICITY
                  (
                  Name VARCHAR(15) NOT NULL UNIQUE,
                  Price MONEY NOT NULL,
                  Primary Key(Name)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM ELECTRICITY;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";
          echo "<br/><br/><br/>";


          $sql = "CREATE TABLE INTERNETCABLE
                  (
                  Name VARCHAR(15) NOT NULL UNIQUE,
                  Price MONEY NOT NULL,
                  Primary Key(Name)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table INTERNETCABLE created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE INTERNETCABLE
                  (
                  Name VARCHAR(15) NOT NULL UNIQUE,
                  Price MONEY NOT NULL,
                  Primary Key(Name)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM INTERNETCABLE;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";


          $sql = "CREATE TABLE WATER
                  (
                  Name VARCHAR(15) NOT NULL UNIQUE,
                  Price MONEY NOT NULL,
                  Primary Key(Name)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table WATER created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE WATER
                  (
                  Name VARCHAR(15) NOT NULL UNIQUE,
                  Price MONEY NOT NULL,
                  Primary Key(Name)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM WATER;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";

          $sql = "CREATE TABLE BRANCH
                  (
                  BranchID CHAR(4) NOT NULL UNIQUE,
                  Location VARCHAR(15) NOT NULL,
                  NoProperties INT DEFAULT 0,
                  Primary Key(BranchID)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table BRANCH created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE BRANCH
                  (
                  BranchID CHAR(4) NOT NULL UNIQUE,
                  Location VARCHAR(15) NOT NULL,
                  NoProperties INT DEFAULT 0,
                  Primary Key(BranchID)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM BRANCH;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";

          $sql = "CREATE TABLE INSURANCE
                  (
                  InsuranceID CHAR(4) NOT NULL UNIQUE,
                  Name VARCHAR(15) NOT NULL,
                  InsuranceType VARCHAR(15) NOT NULL,
                  Price MONEY NOT NULL,
                  Primary Key(InsuranceID)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table INSURANCE created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE INSURANCE
                  (
                  InsuranceID CHAR(4) NOT NULL UNIQUE,
                  Name VARCHAR(15) NOT NULL,
                  InsuranceType VARCHAR(15) NOT NULL,
                  Price MONEY NOT NULL,
                  Primary Key(InsuranceID)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM INSURANCE;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";


          $sql = "CREATE TABLE TOWING
                  (
                  Name VARCHAR(15) NOT NULL UNIQUE,
                  Price MONEY NOT NULL,
                  Primary Key(Name)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table TOWING created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE TOWING
                  (
                  Name VARCHAR(15) NOT NULL UNIQUE,
                  Price MONEY NOT NULL,
                  Primary Key(Name)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM TOWING;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";


          $sql = "CREATE TABLE MAINTENANCE
                  (
                  MaintenanceID CHAR(4) NOT NULL UNIQUE,
                  Name VARCHAR(15) NOT NULL,
                  Phone CHAR(10) NOT NULL,
                  Price MONEY NOT NULL,
                  Rating CHAR NOT NULL,
                  Primary Key(Name)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table MAINTENANCE created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE MAINTENANCE
                  (
                  MaintenanceID CHAR(4) NOT NULL UNIQUE,
                  Name VARCHAR(15) NOT NULL,
                  Phone CHAR(10) NOT NULL,
                  Price MONEY NOT NULL,
                  Rating CHAR NOT NULL,
                  Primary Key(Name)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM MAINTENANCE;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";


          $sql = "CREATE TABLE REMODELLING
                  (
                  RemodelNo CHAR(4) NOT NULL UNIQUE,
                  Detail VARCHAR(15) NOT NULL,
                  Price MONEY NOT NULL,
                  Primary Key(RemodelNo)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table REMODELLING created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE REMODELLING
                  (
                  RemodelNo CHAR(4) NOT NULL UNIQUE,
                  Detail VARCHAR(15) NOT NULL,
                  Price MONEY NOT NULL,
                  Primary Key(RemodelNo)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM REMODELLING;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";


          $sql = "CREATE TABLE MANAGER
                  (
                  ManagerID CHAR(4) NOT NULL UNIQUE,
                  BranchID CHAR(4) NOT NULL,
                  Primary Key(ManagerID)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table MANAGER created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE MANAGER
                  (
                  ManagerID CHAR(4) NOT NULL UNIQUE,
                  BranchID CHAR(4) NOT NULL,
                  Primary Key(ManagerID)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM MANAGER;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";


          $sql = "CREATE TABLE RENTGRADE
                  (
                  Grade CHAR NOT NULL UNIQUE,
                  Rent MONEY NOT NULL,
                  Primary Key(Grade)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table RENTGRADE created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE RENTGRADE
                  (
                  Grade CHAR NOT NULL UNIQUE,
                  Rent MONEY NOT NULL,
                  Primary Key(Grade)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM RENTGRADE;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";



          $sql = "CREATE TABLE INVESTOR
                  (
                  InvestorID CHAR(4) NOT NULL UNIQUE,
                  Name VARCHAR(15) NOT NULL,
                  Amount MONEY,
                  Primary Key(InvestorID)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table INVESTOR created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE INVESTOR
                  (
                  InvestorID CHAR(4) NOT NULL UNIQUE,
                  Name VARCHAR(15) NOT NULL,
                  Amount MONEY,
                  Primary Key(InvestorID)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM INVESTOR;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";


          $sql = "CREATE TABLE TENANT
                  (
                  TenantID CHAR(4) NOT NULL UNIQUE,
                  PropertyID CHAR(4) NOT NULL,
                  ICName VARCHAR(15) NOT NULL,
                  Rent MONEY,
                  Rentperperson MONEY,
                  Primary Key(TenantID)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table TENANT created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE TENANT
                  (
                  TenantID CHAR(4) NOT NULL UNIQUE,
                  PropertyID CHAR(4) NOT NULL,
                  ICName VARCHAR(15) NOT NULL,
                  Rent MONEY,
                  Rentperperson MONEY,
                  Primary Key(TenantID)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM TENANT;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";


          $sql = "CREATE TABLE ROOMMATE
                  (
                  RoommateID CHAR(4) NOT NULL UNIQUE,
                  TenantID CHAR(4) NOT NULL,
                  Name VARCHAR(15) NOT NULL,
                  Gender VARCHAR(15) NOT NULL,
                  Primary Key(RoommateID)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table ROOMMATE created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE ROOMMATE
                  (
                  RoommateID CHAR(4) NOT NULL UNIQUE,
                  TenantID CHAR(4) NOT NULL,
                  Name VARCHAR(15) NOT NULL,
                  Gender VARCHAR(15) NOT NULL,
                  Primary Key(RoommateID)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM ROOMMATE;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";


          $sql = "CREATE TABLE PROPERTY
                  (
                  PropertyID CHAR(4) NOT NULL,
                  GasName VARCHAR(15) NOT NULL,
                  ElectricityName VARCHAR(15) NOT NULL,
                  WaterName VARCHAR(15) NOT NULL,
                  BranchID CHAR(4) NOT NULL,
                  InsuranceID CHAR(4) NOT NULL,
                  TowingName VARCHAR(15) NOT NULL,
                  MaintenanceID CHAR(4) NOT NULL, 
                  RemodelNo CHAR(4) NOT NULL,
                  RentGrade CHAR NOT NULL,
                  Max_tenants INT NOT NULL,
                  Cost MONEY,
                  Primary Key(PropertyID)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table PROPERTY created</p>";
           echo "<div class=\"row\">";
          echo "<p>CREATE TABLE PROPERTY
                  (
                  PropertyID CHAR(4) NOT NULL,
                  GasName VARCHAR(15) NOT NULL,
                  ElectricityName VARCHAR(15) NOT NULL,
                  WaterName VARCHAR(15) NOT NULL,
                  BranchID CHAR(4) NOT NULL,
                  InsuranceID CHAR(4) NOT NULL,
                  TowingName VARCHAR(15) NOT NULL,
                  MaintenanceID CHAR(4) NOT NULL, 
                  RemodelNo CHAR(4) NOT NULL,
                  RentGrade CHAR NOT NULL,
                  Max_tenants INT NOT NULL,
                  Cost MONEY,
                  Primary Key(PropertyID)
                  );</p>";
          echo "</div><div class=\"row\">";
          $sql ="SELECT * FROM PROPERTY;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div>";

          echo "<br/><br/><br/>";

          $sql = "CREATE TABLE EMPLOYEE
                  (
                  ID CHAR(4) NOT NULL UNIQUE,
                  ManagerID CHAR(4),
                  Salary MONEY NOT NULL,
                  Name VARCHAR(15) NOT NULL,
                  Primary Key(ID)
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table EMPLOYEE created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE EMPLOYEE
                  (
                  ID CHAR(4) NOT NULL UNIQUE,
                  ManagerID CHAR(4),
                  Salary MONEY NOT NULL,
                  Name VARCHAR(15) NOT NULL,
                  Primary Key(ID)
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM EMPLOYEE;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";

          $sql = "CREATE TABLE INVEST
                  (
                  InvestorID CHAR(4) NOT NULL,
                  BranchID CHAR(4) NOT NULL,
                  Amount MONEY NOT NULL
                  );";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
                print_r( sqlsrv_errors(), true);
          }
          echo "<p>Table INVEST created</p>";
           echo "<div class=\"row\"><div class=\"col s4 m4 l4\">";
          echo "<p>CREATE TABLE INVEST
                  (
                  InvestorID CHAR(4) NOT NULL,
                  BranchID CHAR(4) NOT NULL,
                  Amount MONEY NOT NULL
                  );</p>";
          echo "</div><div class=\"col s8 m8 l8\">";
          $sql ="SELECT * FROM INVEST;";
          $stmt =  sqlsrv_query( $conn, $sql);    
          echo"<table><thead><tr>";     
          foreach( sqlsrv_field_metadata( $stmt ) as $fieldMetadata ) {
              foreach( $fieldMetadata as $name => $value) {
                if($name === "Name"){
                  echo "<th data-field='$value'>$value</th>";
                  break;
                }
              }
          }  
         echo "</tr></thead></table></div></div>";

          echo "<br/><br/><br/>";
          $sql = "
                  ALTER TABLE PROPERTY
                  ADD FOREIGN KEY (GasName)
                  REFERENCES GAS(Name);

                  ALTER TABLE EMPLOYEE
                  ADD FOREIGN KEY (ManagerID)
                  REFERENCES MANAGER(ManagerID);

                  ALTER TABLE PROPERTY
                  ADD FOREIGN KEY (ElectricityName)
                  REFERENCES ELECTRICITY(Name);

                  ALTER TABLE PROPERTY
                  ADD FOREIGN KEY (WaterName)
                  REFERENCES WATER(Name);

                  ALTER TABLE PROPERTY
                  ADD FOREIGN KEY (TowingName)
                  REFERENCES TOWING(Name);

                  ALTER TABLE PROPERTY
                  ADD FOREIGN KEY (BranchID)
                  REFERENCES BRANCH(BranchID);

                  ALTER TABLE PROPERTY
                  ADD FOREIGN KEY (InsuranceID)
                  REFERENCES INSURANCE(InsuranceID);

                  ALTER TABLE PROPERTY
                  ADD FOREIGN KEY (MaintenanceID)
                  REFERENCES MAINTENANCE(MaintenanceID);

                  ALTER TABLE PROPERTY
                  ADD FOREIGN KEY (RemodelNo)
                  REFERENCES REMODELLING(RemodelNo);

                  ALTER TABLE PROPERTY
                  ADD FOREIGN KEY (RentGrade)
                  REFERENCES RENTGRADE(Grade);

                  ALTER TABLE TENANT
                  ADD FOREIGN KEY (PropertyID)
                  REFERENCES PROPERTY(PropertyID);

                  ALTER TABLE TENANT
                  ADD FOREIGN KEY (ICName)
                  REFERENCES INTERNETCABLE(Name);

                  ALTER TABLE ROOMMATE
                  ADD FOREIGN KEY (TenantID)
                  REFERENCES TENANT(TenantID);

                  ALTER TABLE MANAGER
                  ADD FOREIGN KEY (BranchID)
                  REFERENCES BRANCH(BranchID);

                  ALTER TABLE INVEST
                  ADD FOREIGN KEY (BranchID)
                  REFERENCES BRANCH(BranchID);

                  ALTER TABLE INVEST
                  ADD FOREIGN KEY (InvestorID)
                  REFERENCES INVESTOR(InvestorID);";

            $stmt = sqlsrv_query($conn, $sql);
            if ($stmt === false)
             {
              die(print_r(sqlsrv_errors(), true));
             }

             sqlsrv_close($conn);
          ?>

          <table><thead></thead></table>
      </div>
      <div class="card-action">
        <a href="addtriggers.php">Next: Add Triggers</a>
      </div>
    </div>
  </div>
</body>
 </html>