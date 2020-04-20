---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2020-04-16 02:00:00 -0100
categories: jekyll update
---
                    For my work this week I'm continuing my work on adding a backend  to my 
webpage that process username and password. I ran an early version that was 
basic that handled the login through javascript. With the newer backend I'm 
installing it will use a mysql db and keep login info and password here. I started
the process by setting up and ec2. Next I installed httpd and started the server. 
I chose to configure the server to start with each system boot with the command 
sudo chkconfig httpd on. Next I spun up and RDS instance in AWS. The intent here is to connect to this database from the webserver. I then changed to the 
www directory and used the command "mkdir inc" . This directory will hold are necessary files. I then created a file called dbinfo.inc. In this file I define the 
DB-SERVER,DB_USER,DB_PASSWORD,and DB_DATABASE. I wrote this in php and saved it. 
Next I created a Sample.php page. I downloaded code from AWS tutorial that creates and 
process variables in a login form. I will continue more next week. 