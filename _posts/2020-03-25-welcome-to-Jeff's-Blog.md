---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2020-03-11 12:00:00 -0700
categories: jekyll update
---
This week I spent most of my time on creating a Database(mysql) in an ec2 RDS instance. This 
process was started by creating an rds instance in aws. I put in the necessary specifications 
regarding my created vpc and subnets and asked for it to be made not public. One of the keys 
here is when I created a security group I allowed connection on port 3306 by my new ec2
instance ip. This allows the rds instance to give access to my ec2. I logged into my seperate ec2 
and downloaded mysql client. From here I entered the command "mysql -h 
newdb.ccop1vv8dp8o.us-west-1.rds.amazonaws.com -P 3306 xxxxx -p"  This gives me access to the ec2 with the RDS. From here I logged onto the server and created a table relating to the recent corona outbreak and some statistics we were logging about infection rates. I then 
ran the mysql command " SELECT from infections, recovered  From VIRUS_Table;" This showed us the result for infections and recovered in our database. We will continue to work with the data and modify our new database. 