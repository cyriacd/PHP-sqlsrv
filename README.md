# PHP-sqlsrv
Simple application for setting up sqlsrv database with php

This application uses the php plugin for sqlsrv to send SQL commands to an unstance of sqlsrver running on the hsot system.

The following is the ER diagram for the database created:

![ER Diagram](/er.png)


 
| |Relations|Attributes|
|------|-------|-------|
|1.|Properties|PropertyID, uName, iName,  tName, cName, mName, BuyerID, EmployeeID, BranchID, address, cost per month|
|2|Employees|EmployeeID, BrancID, salaries, first name, last name, job title|
|3|Maintenances|mName,   Price per month|
|4|Contractors|cName ,Building location, Cost|
|5|Bank|bName,  loans|
|6|Investors|InvestorID, BranchID, invest amount|
|7|Original Owners|OwnersID, BranchID, Name, Sold price| 
|8|Suppliers|SupplierID, Price|
|9|Branch|BranchID, Address|
|10|Utilities|uName, contracted price|
|11|Tenants|TenantID, propertyID, icName, payment, name|
|12|Buyers|BuyerID, bName, payment, name|
|13|Insurance|iName, type, price|
|14|Towing|tName, cost|
|15|Internet&Cable|icName,  services, prices|
|16|Negotiate|EmployeeID, SupplierID|
|17|Supply|SupplierID, mName|
|18|Invest|InvestorID, BranchID|
|19|Make Deals|icName, BranchID|
