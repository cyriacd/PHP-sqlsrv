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
          $sql = "
                CREATE TRIGGER MaxPeople ON ROOMMATE
                FOR INSERT
                AS
                  declare @tenant CHAR(4);
                  declare @property CHAR(4);
                  declare @maxpeople INT;
                  declare @currentnumber INT;
                  declare @id CHAR(4);
                  select @id = i.RoommateID from inserted i;
                  select @tenant = i.TenantID from inserted i;
                  select @property = 
                    (select PropertyID
                    from TENANT
                    where TENANT.TenantID = @tenant);
                  select @maxpeople = 
                    (select Max_tenants
                    from PROPERTY
                    where PropertyID = @property);
                  select @currentnumber = 
                    (select count(RoommateID)
                    from ROOMMATE
                    where TenantID = @tenant);
                  PRINT @maxpeople;
                  PRINT @currentnumber;
                  if(@currentnumber+1 > @maxpeople)
                  BEGIN
                    DELETE FROM ROOMMATE
                    WHERE RoommateID = @id ;
                    PRINT @id
                    PRINT 'TOO MANY ROOMMATES!'
                  END
          ";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
               die( print_r( sqlsrv_errors(), true));
          }
          sqlsrv_close($conn);
                    $conn = sqlsrv_connect( $serverName, $connectionInfo);
          $sql = "
                CREATE TRIGGER CalculateTotalInvest ON INVEST
                FOR INSERT
                AS
                  declare @investamount money;
                  declare @investor CHAR(4);
                  declare @totalinvest money;
                  select @investor = i.InvestorID from inserted i;
                  select @totalinvest = 
                    (select SUM(Amount)
                    from INVEST
                    where InvestorID = @investor); 
                  UPDATE INVESTOR
                  SET Amount = @totalinvest
                  WHERE InvestorID = @investor;
          ";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
               die( print_r( sqlsrv_errors(), true));
          }
          sqlsrv_close($conn);
                    $conn = sqlsrv_connect( $serverName, $connectionInfo);
          $sql = "
               CREATE TRIGGER CalculateRent ON ROOMMATE
                FOR INSERT
                AS
                  declare @totalrent money;
                  declare @grade char;
                  declare @numberofroommates int;
                  declare @headtenant char(4);
                  declare @property char(4);
                  declare @rentpp money;
                  select @headtenant = i.TenantID from inserted i;
                  select @property = 
                    (select PropertyID
                    from TENANT
                    where TenantID = @headtenant);
                  select @grade = 
                    (select RentGrade
                    from PROPERTY
                    where PropertyID = @property);
                  select @totalrent = 
                    (select Rent
                    from RENTGRADE
                    where Grade = @grade);
                  UPDATE TENANT
                  SET Rent = @totalrent
                  WHERE TenantID = @headtenant;
                  select @numberofroommates =
                    (select 
                    count(RoommateID)
                    from ROOMMATE
                    where TenantID = @headtenant);
                  select @rentpp = @totalrent / @numberofroommates; 
                  UPDATE TENANT
                  SET Rentperperson = @rentpp
                  WHERE TenantID = @headtenant;
          ";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
               die( print_r( sqlsrv_errors(), true));
          }
          sqlsrv_close($conn);
                    $conn = sqlsrv_connect( $serverName, $connectionInfo);
          $sql = "
                CREATE TRIGGER CalculateCost ON PROPERTY
                FOR INSERT
                AS
                    declare @cost money;
                  declare @gas varchar(15);
                  declare @electric varchar(15);
                  declare @water varchar(15);
                  declare @towing varchar(15);
                  declare @insurance char(4);
                  declare @maint char(4);
                  declare @remodel char(4);

                  declare @gasc money;
                  declare @electricc money;
                  declare @waterc money;
                  declare @towingc money;
                  declare @insurancec money;
                  declare @maintc money;
                  declare @remodelc money;

                  declare @property char(4);
                  select @property = i.PropertyID from inserted i;
                  select @gas = 
                    (select GasName 
                    from PROPERTY 
                    where PropertyID = @property);
                  select @electric = 
                    (select ElectricityName 
                    from PROPERTY 
                    where PropertyID = @property);
                  select @water = 
                    (select WaterName 
                    from PROPERTY
                    where PropertyID = @property);
                  select @towing = 
                    (select TowingName 
                    from PROPERTY 
                    where PropertyID = @property);
                  select @insurance= 
                    (select InsuranceID 
                    from PROPERTY 
                    where PropertyID = @property);
                  select @maint = 
                    (select MaintenanceID 
                    from PROPERTY 
                    where PropertyID = @property);
                  select @remodel = 
                    (select RemodelNo 
                    from PROPERTY 
                    where PropertyID = @property);
                  select @gasc = 
                    (select Price
                    from GAS
                    where Name = @gas);
                  select @waterc =
                    (select Price
                    from WATER
                    where Name = @water);
                  select @electricc = 
                    (select Price
                    from ELECTRICITY
                    where Name = @electric);
                  select @insurancec = 
                    (select Price
                    from INSURANCE
                    where InsuranceID = @insurance);
                  select @towingc =
                    (select Price
                    from TOWING
                    where Name = @towing);
                  select @maintc =
                    (select Price
                    from MAINTENANCE
                    where MaintenanceID = @maint)
                  select @remodelc =    
                    (select Price
                    from REMODELLING
                    where RemodelNo = @remodel);
                    declare @temp money;
                    select @temp = @gasc+@waterc;
                    select @cost = @temp + @electricc;
                    select @temp = @cost + @insurancec;
                    select @cost = @temp + @towingc;
                    /*select @temp = @cost+@maintc;*/
                    select @cost = @temp+@remodelc;
                    UPDATE PROPERTY
                    SET Cost = @cost
                    WHERE PropertyID = @property;
          ";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
               die( print_r( sqlsrv_errors(), true));
          }
          sqlsrv_close($conn);
                    $conn = sqlsrv_connect( $serverName, $connectionInfo);
          $sql = "
                  CREATE TRIGGER CalculateNoofProperties ON PROPERTY
                  FOR INSERT
                  AS
                    declare @branch char(4);
                    declare @count int;
                    select @branch = i.BranchID from inserted i;
                    select @count = 
                      (select count(PropertyID)
                      from PROPERTY
                      where BranchID = @branch);
                    UPDATE BRANCH
                    SET NoProperties = @count
                    WHERE BranchID = @branch;
          ";
          $stmt = sqlsrv_query( $conn, $sql);
          if( $stmt === false ) {
               die( print_r( sqlsrv_errors(), true));
          }
          sqlsrv_close($conn);

          echo "<p>Triggers Created</p>";
          echo "<p>
              CREATE TRIGGER MaxPeople ON ROOMMATE\n
              FOR INSERT\n
              AS\n
                declare @tenant CHAR(4);\n
                declare @property CHAR(4);\n
                declare @maxpeople INT;\n
                declare @currentnumber INT;\n
                declare @id CHAR(4);\n
                select @id = i.RoommateID from inserted i;\n
                select @tenant = i.TenantID from inserted i;\n
                select @property = \n
                  (select PropertyID\n
                  from TENANT\n
                  where TENANT.TenantID = @tenant);\n
                select @maxpeople = \n
                  (select Max_tenants\n
                  from PROPERTY\n
                  where PropertyID = @property);\n
                select @currentnumber = \n
                  (select count(RoommateID)\n
                  from ROOMMATE\n
                  where TenantID = @tenant);\n
                PRINT @maxpeople;\n
                PRINT @currentnumber;\n
                if(@currentnumber+1 > @maxpeople)\n
                BEGIN\n
                  DELETE FROM ROOMMATE\n
                  WHERE RoommateID = @id ;\n
                  PRINT @id\n
                  PRINT 'TOO MANY ROOMMATES!'\n
                END\n
\n
              GO\n
\n
              </p><br/><br/><br/><p>CREATE TRIGGER CalculateTotalInvest ON INVEST\n
              FOR INSERT\n
              AS\n
                declare @investamount money;\n
                declare @investor CHAR(4);\n
                declare @totalinvest money;\n
                select @investor = i.InvestorID from inserted i;\n
                select @totalinvest = \n
                  (select SUM(Amount)\n
                  from INVEST\n
                  where InvestorID = @investor); \n
                UPDATE INVESTOR\n
                SET Amount = @totalinvest\n
                WHERE InvestorID = @investor;\n
\n
              GO\n
\n
              </p><br/><br/><br/><p>CREATE TRIGGER CalculateRent ON ROOMMATE\n
              FOR INSERT\n
              AS\n
                declare @totalrent money;\n
                declare @grade char;\n
                declare @numberofroommates int;\n
                declare @headtenant char(4);\n
                declare @property char(4);\n
                declare @rentpp money;\n
                select @headtenant = i.TenantID from inserted i;\n
                select @property = \n
                  (select PropertyID\n
                  from TENANT\n
                  where TenantID = @headtenant);\n
                select @grade = \n
                  (select RentGrade\n
                  from PROPERTY\n
                  where PropertyID = @property);\n
                select @totalrent = \n
                  (select Rent\n
                  from RENTGRADE\n
                  where Grade = @grade);\n
                UPDATE TENANT\n
                SET Rent = @totalrent\n
                WHERE TenantID = @headtenant;\n
                select @numberofroommates =\n
                  (select \n
                  count(RoommateID)\n
                  from ROOMMATE\n
                  where TenantID = @headtenant);\n
                select @rentpp = @totalrent / @numberofroommates; \n
                UPDATE TENANT\n
                SET Rentperperson = @rentpp\n
                WHERE TenantID = @headtenant;\n
              GO\n
\n
\n
              </p><br/><br/><br/><p>CREATE TRIGGER CalculateCost ON PROPERTY\n
              FOR INSERT\n
              AS\n
                  declare @cost money;\n
                declare @gas varchar(15);\n
                declare @electric varchar(15);\n
                declare @water varchar(15);\n
                declare @towing varchar(15);\n
                declare @insurance char(4);\n
                declare @maint char(4);\n
                declare @remodel char(4);\n
\n
                declare @gasc money;\n
                declare @electricc money;\n
                declare @waterc money;\n
                declare @towingc money;\n
                declare @insurancec money;\n
                declare @maintc money;\n
                declare @remodelc money;\n
\n
                declare @property char(4);\n
                select @property = i.PropertyID from inserted i;\n
                select @gas = \n
                  (select GasName \n
                  from PROPERTY \n
                  where PropertyID = @property);\n
                select @electric = \n
                  (select ElectricityName \n
                  from PROPERTY \n
                  where PropertyID = @property);\n
                select @water = \n
                  (select WaterName \n
                  from PROPERTY\n
                  where PropertyID = @property);\n
                select @towing = \n
                  (select TowingName \n
                  from PROPERTY \n
                  where PropertyID = @property);\n
                select @insurance= \n
                  (select InsuranceID \n
                  from PROPERTY \n
                  where PropertyID = @property);\n
                select @maint = \n
                  (select MaintenanceID \n
                  from PROPERTY \n
                  where PropertyID = @property);\n
                select @remodel = \n
                  (select RemodelNo \n
                  from PROPERTY \n
                  where PropertyID = @property);\n
                select @gasc = \n
                  (select Price\n
                  from GAS\n
                  where Name = @gas);\n
                select @waterc =\n
                  (select Price\n
                  from WATER\n
                  where Name = @water);\n
                select @electricc = \n
                  (select Price\n
                  from ELECTRICITY\n
                  where Name = @electric);\n
                select @insurancec = \n
                  (select Price\n
                  from INSURANCE\n
                  where InsuranceID = @insurance);\n
                select @towingc =\n
                  (select Price\n
                  from TOWING\n
                  where Name = @towing);\n
                select @maintc =\n
                  (select Price\n
                  from MAINTENANCE\n
                  where MaintenanceID = @maint)\n
                select @remodelc =    \n
                  (select Price\n
                  from REMODELLING\n
                  where RemodelNo = @remodel);\n
                  declare @temp money;\n
                  select @temp = @gasc+@waterc;\n
                  select @cost = @temp + @electricc;\n
                  select @temp = @cost + @insurancec;\n
                  select @cost = @temp + @towingc;\n
                  /*select @temp = @cost+@maintc;*/\n
                  select @cost = @temp+@remodelc;\n
                  UPDATE PROPERTY\n
                  SET Cost = @cost\n
                  WHERE PropertyID = @property;\n
              GO\n
              </p><br/><br/><br/><p>CREATE TRIGGER CalculateNoofProperties ON PROPERTY\n
              FOR INSERT\n
              AS\n
                declare @branch char(4);\n
                declare @count int;\n
                select @branch = i.BranchID from inserted i;\n
                select @count = \n
                  (select count(PropertyID)\n
                  from PROPERTY\n
                  where BranchID = @branch);\n
                UPDATE BRANCH\n
                SET NoProperties = @count\n
                WHERE BranchID = @branch;\n
              GO
          </p>"
          ?>
        </p>
      </div>
      <div class="card-action">
        <a href="insertdata.php">Next: Insert Data</a>
      </div>
    </div>
  </div>
</body>
 </html>
