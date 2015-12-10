        <?php
        include 'header.php';
        echo "<span class=\"card-title\">Real Estate Database</span><p>";
        $serverName     = "CYRIAC-PC\csedata";
        $connectionInfo = array(
          "UID" => "sa",
          "PWD" => "qwertyuiop",
          "Database" => "REALESTATE"
        );
        $conn           = sqlsrv_connect($serverName, $connectionInfo);
        $sql            = "
                          INSERT INTO GAS (Name, Price)
                          VALUES ('Columbia',300);
                          INSERT INTO GAS (Name, Price)
                          VALUES ('Chicago',500);
                          INSERT INTO GAS (Name, Price)
                          VALUES ('OSU',300);

                          INSERT INTO ELECTRICITY(Name, Price)
                          VALUES ('AEP',6000);
                          INSERT INTO ELECTRICITY(Name, Price)
                          VALUES ('Midwest',5000);
                          INSERT INTO ELECTRICITY(Name, Price)
                          VALUES ('OSU',2500);

                          INSERT INTO Water(Name, Price)
                          VALUES ('ColumbusWater',240);
                          INSERT INTO Water(Name, Price)
                          VALUES ('MidwestWater', 300);  
                          INSERT INTO Water(Name, Price)
                          VALUES ('Conservice', 280);

                          INSERT INTO INTERNETCABLE(Name, Price)
                          VALUES ('ATT',840);
                          INSERT INTO INTERNETCABLE(Name, Price)
                          VALUES ('TWC',720);
                          INSERT INTO INTERNETCABLE(Name, Price)
                          VALUES ('WOW',420);
                          INSERT INTO INTERNETCABLE(Name, Price)
                          VALUES ('fiber',1800);

                          INSERT INTO TOWING(Name, Price)
                          VALUES('Shamrock', 100);
                          INSERT INTO TOWING(Name, Price)
                          VALUES('ChicagoTow', 200);
                          INSERT INTO TOWING(Name, Price)
                          VALUES('BestNeighbor', 800);


                          INSERT INTO INSURANCE(InsuranceID,Name,InsuranceType,Price)
                          VALUES('I001','Nationwide','Fire',120);
                          INSERT INTO INSURANCE(InsuranceID,Name,InsuranceType,Price)
                          VALUES('I002','Nationwide','Flood',120);
                          INSERT INTO INSURANCE(InsuranceID,Name,InsuranceType,Price)
                          VALUES('I003','Nationwide','Tornado',120);
                          INSERT INTO INSURANCE(InsuranceID,Name,InsuranceType,Price)
                          VALUES('I004','Nationwide','Full',120);
                          INSERT INTO INSURANCE(InsuranceID,Name,InsuranceType,Price)
                          VALUES('I005','StateFarm','Fire',120);
                          INSERT INTO INSURANCE(InsuranceID,Name,InsuranceType,Price)
                          VALUES('I006','StateFarm','Full',120);

                          INSERT INTO RENTGRADE (Grade, Rent)
                          VALUES('A',48000);
                          INSERT INTO RENTGRADE (Grade, Rent)
                          VALUES('B',35000);
                          INSERT INTO RENTGRADE (Grade, Rent)
                          VALUES('C',25000);

                          INSERT INTO INVESTOR(InvestorID,Name)
                          VALUES('Iv01','Jason');
                          INSERT INTO INVESTOR(InvestorID,Name)
                          VALUES('Iv02','Mark');

                          INSERT INTO MAINTENANCE(MaintenanceID, Name,Phone,Price,Rating)
                          VALUES('M001','John','4440005555',1000,'A');
                          INSERT INTO MAINTENANCE(MaintenanceID, Name,Phone,Price,Rating)
                          VALUES('M002','Tom','4586589547',950,'A');
                          INSERT INTO MAINTENANCE(MaintenanceID, Name,Phone,Price,Rating)
                          VALUES('M003','Nick','6145795454',1000,'B');
                          INSERT INTO MAINTENANCE(MaintenanceID, Name,Phone,Price,Rating)
                          VALUES('M004','Jason','5645256548',800,'D');


                          INSERT INTO BRANCH(BranchID,Location)
                          VALUES('B001','Columbus');
                          INSERT INTO BRANCH(BranchID,Location)
                          VALUES('B002','Chicago');
                          INSERT INTO BRANCH(BranchID,Location)
                          VALUES('B003','NYC');

                          INSERT INTO MANAGER(ManagerID, BranchID)
                          VALUES('E001','B001');
                          INSERT INTO MANAGER(ManagerID, BranchID)
                          VALUES('E004','B002');



                          INSERT INTO EMPLOYEE(ID, ManagerID, Salary, Name)
                          VALUES('E001','E001',65000,'Cyriac');
                          INSERT INTO EMPLOYEE(ID, ManagerID, Salary, Name)
                          VALUES('E002','E001',50000,'HoKang');
                          INSERT INTO EMPLOYEE(ID, ManagerID, Salary, Name)
                          VALUES('E003','E004',40000,'Don');
                          INSERT INTO EMPLOYEE(ID, ManagerID, Salary, Name)
                          VALUES('E004','E004',35000,'Brutus');

                          INSERT INTO REMODELLING(RemodelNo,Detail,Price)
                          VALUES('C000','NA',0);
                          INSERT INTO REMODELLING(RemodelNo,Detail,Price)
                          VALUES('C001','LivingRoom',1200);
                          INSERT INTO REMODELLING(RemodelNo,Detail,Price)
                          VALUES('C002','Bathroom',1500);
                          INSERT INTO REMODELLING(RemodelNo,Detail,Price)
                          VALUES('C003','Wiring',200);

                          INSERT INTO PROPERTY(PropertyID,GasName,ElectricityName,WaterName,BranchID,InsuranceID,TowingName,MaintenanceID,RemodelNo,RentGrade,Max_tenants)
                          VALUES('P001','Columbia','AEP', 'ColumbusWater','B001','I004','Shamrock','M001','C001','A', 2);
                          INSERT INTO PROPERTY(PropertyID,GasName,ElectricityName,WaterName,BranchID,InsuranceID,TowingName,MaintenanceID,RemodelNo,RentGrade,Max_tenants)
                          VALUES('P002','Chicago','AEP',  'Conservice','B002','I003','ChicagoTow','M003','C000','B',  3);
                          INSERT INTO PROPERTY(PropertyID,GasName,ElectricityName,WaterName,BranchID,InsuranceID,TowingName,MaintenanceID,RemodelNo,RentGrade,Max_tenants)
                          VALUES('P003','Chicago','Midwest',  'MidwestWater','B002','I001','ChicagoTow','M003','C000','C',  2);
                          INSERT INTO PROPERTY(PropertyID,GasName,ElectricityName,WaterName,BranchID,InsuranceID,TowingName,MaintenanceID,RemodelNo,RentGrade,Max_tenants)
                          VALUES('P004','Columbia','Midwest', 'MidwestWater','B001','I006','BestNeighbor','M002','C002','A',  5);


                          INSERT INTO TENANT(TenantID,PropertyID,ICName)
                          VALUES('R006','P004','ATT');
                          INSERT INTO TENANT(TenantID,PropertyID,ICName)
                          VALUES('R007','P003','TWC');
                          INSERT INTO TENANT(TenantID,PropertyID,ICName)
                          VALUES('R008','P002','WOW');
                          INSERT INTO TENANT(TenantID,PropertyID,ICName)
                          VALUES('R009','P001','ATT');

                          INSERT INTO ROOMMATE(RoommateID,TenantID,Name,Gender)
                          VALUES('R001','R009','Jason','M');
                          INSERT INTO ROOMMATE(RoommateID,TenantID,Name,Gender)
                          VALUES('R002','R007','Cyriac','M');
                          INSERT INTO ROOMMATE(RoommateID,TenantID,Name,Gender)
                          VALUES('R003','R008','Tom','M');
                          INSERT INTO ROOMMATE(RoommateID,TenantID,Name,Gender)
                          VALUES('R004','R006','Noelle','F');
                          INSERT INTO ROOMMATE(RoommateID,TenantID,Name,Gender)
                          VALUES('R005','R007','Morgan','F');
                          INSERT INTO ROOMMATE(RoommateID,TenantID,Name,Gender)
                          VALUES('R006','R006','Jacob','M');
                          INSERT INTO ROOMMATE(RoommateID,TenantID,Name,Gender)
                          VALUES('R007','R007','Dalaney','F');
                          INSERT INTO ROOMMATE(RoommateID,TenantID,Name,Gender)
                          VALUES('R008','R008','Kelsey','F');
                          INSERT INTO ROOMMATE(RoommateID,TenantID,Name,Gender)
                          VALUES('R009','R009','Parker','M');

                          ";
        $stmt           = sqlsrv_query($conn, $sql);
        if ($stmt === false)
         {
          die(print_r(sqlsrv_errors(), true));
         }

       $sql = " INSERT INTO INVEST(InvestorID,BranchID,Amount)
              VALUES('Iv01','B001',300000);
              INSERT INTO INVEST(InvestorID,BranchID,Amount)
              VALUES('Iv01','B002',400000);
              INSERT INTO INVEST(InvestorID,BranchID,Amount)
              VALUES('Iv02','B001',400000);
                    ";
                            $stmt           = sqlsrv_query($conn, $sql);
        if ($stmt === false)
         {
          die(print_r(sqlsrv_errors(), true));
         }

        ?>
        </p>
      </div>
      <div class="card-action">
        <a href="selectdata.php">Next: Select All Data</a>
      </div>
    </div>
  </div>
</body>
</html>
