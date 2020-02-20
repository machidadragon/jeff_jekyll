---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2020-02-20 12:00:00 -0700
categories: jekyll update
---

   This week we worked on creating IAM users and granting permissions to them. We started by
 creating three users, user-1,user2,user3. We then granted ec2 access to user1, and 2 then
 s3 access to user3. We did this by creating 3 groups : Then the users were assigned to the access 
they required. We then proceeded to test each user in a sign in with successful results. We then set
up a VPC that had 2 public subnets and 2 private subnets. We created an internet gateway to 
allow access to the internet for the public subnets. We used a CIDR block of 10.0.0.0/16 for the VPC.
We used CIDR block of 10.0.0.0/24, 10.0.1.0/24 , 10.0.2.0/24, 10.0.3.0/24 for the subnets. We then
created a security group to allow http access. We then tested the VPC to be sure it worked corrrectly. 


