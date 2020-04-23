---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2020-04-24 09:09:00 -0600
categories: jekyll update
---

      For this weeks blog I am continuing my work on mysql database and connecting 
it to my website on an ec2 for a login feature.  I strated by going into my www folder
 in the ec2 and I created a inc directory. In the inc directory we created a file called
 dbinfo.inc. In this folder I specify, DB_SERVER, DB_USERNAME, DBPASSWORD, and 
DBDATABASE. This is used to log into the mysql server. The DBSERVER specifies the
bd endpoint of my aws rds. The DBUSERNAME is theRDS db user. PAssword is 
passowrd, and DBDATABASE is the name of the aws rds db.  From here I go to
http://ec2-13-56-163-143.us-west-compute.amazonaws.com/SamplePage.php on
 my browser. The page displays a user and password and textboxes for entry. At first 
run I had issues connecting to the database but I figured it out it was some inconsistent 
naming issues. While I can nowconnect to thedatabse I'm still having issues entering data
from thewebsite correctly so it is recorded in the databse.    