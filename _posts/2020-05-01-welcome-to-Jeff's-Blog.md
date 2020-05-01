---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2020-05-01 09:08:00 -0600
categories: jekyll update
---
 


      For this weeks blog I am continuing my work on mysql database and connecting it to my website on an ec2.   SO I finally connected to the Db and
from theec2 website I can enter a name and address and it is entered into thedatabse and displayed on thewebpage. This is done through php. In my 
/var/www, I created a file called directory call inc. From there I created a file called dbinfo.inc. In this file you will have the info needed by  the index file. 
I use the format define('DB_SERVER', 'amazonendpointofRDS'); I do this for Username,Password, and Database. I then go into my html directory and create 
an index.php file. Note it must be index.php not index.html as it uses php code. 
here the file starts with <?php include "../inc/abinfo.inc" ?>This allows it to use 
the varaibles in the dbinfo.inc. Here is the code used to connect, it comes after 
the php variable portion of the file is closed. Although it is contained in php brackets as well. HEre is a sample of the code
<?php

  /* Connect to MySQL and select the database. */
  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_conne$
  $database = mysqli_select_db($connection, DB_DATABASE);

  /* Ensure that the EMPLOYEES table exists. */
  VerifyEmployeesTable($connection, DB_DATABASE);

  /* If input fields are populated, add a row to the EMPLOYEES table. */
  $employee_name = htmlentities($_POST['NAME']);
  $employee_address = htmlentities($_POST['ADDRESS']);

  if (strlen($employee_name) || strlen($employee_address)) {
    AddEmployee($connection, $employee_name, $employee

This code is follwed by code that access the mysql table sprecified and enter values inside then displays them on  my webpage. 