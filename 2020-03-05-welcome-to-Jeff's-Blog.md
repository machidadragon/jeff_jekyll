---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2020-03-05 12:00:00 -0700
categories: jekyll update
---

  This week my work centered on setting up an rds database in aws and connecting to an ec2. After creating the
RDS database on amazon, I created one with a t2micro size to keep it free. I created a security group that allowed  
incoming mysql/Aurora on port 3306 and it would only accept this connection through the security group of the ec2 
I connected. I allowed public access just to make it as simple as possible. I then created an ec2 in the same vpc and 
logged into the ec2. I downloaded mysql on the ec2 and then ran the command to connect to the rds using 
"mysql -h <endpoint> -P 3306<user> -p".  I have had issues connecting constantly recieiving the message , 
ERROR 1045 (28000): Access denied for user 'root'@'172.31.13.160' (using password: YES).  Currently I am 
still working on this issue. I have searched stack overflow and none of the solutions have worked yet. I will continue
 to research the solution and update my progress. 