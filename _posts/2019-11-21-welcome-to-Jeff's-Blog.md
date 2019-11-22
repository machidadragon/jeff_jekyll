---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2019-11-21 12:00:00 -0700
categories: jekyll update
---

    This week our group began to prepare for our final lab. For this lab we are leaning toward doing Lambda with 
Amazon ec2 instances. Each member in the group was tasked with doing research on Lambda functions. MY review of 
Lambda is as follows AWS Lambda uses code (python is the one we will use) to analyze aws data and make purchases
on ec2's when in a certain price range. Companies like Nordstrom and Coca Cola already successfully use lambda 
functions. LAmbda allows you to automate functions to handle to handle triggered events. During our last projects 
my responsibilities includes bastion host, hugo website, ansible playbook help, so I didn't have any experience yet 
with lambda. From my initiial research I got a taste fo how lambda works and can be used. 
   
    The way it works from my research is clients send data to Lambda, Lambda recieives the request and gives it 
to the container or containers. The container contains code provided by the user to satisfy the query. IAM roles
are used to handle the permission. An example of this in work would be if you have an s3 bucket with your resources
and want to back that up to another s3 bucket you can use lambda to handle this. Anytime a new object is placed in 
the s3 bucket(change of metadata) the event triggers a lambda function whcih will copy this new data  to the other 
bucket.

                                   Flow of S3 resource bucket to s3 backup bucket 

s3 Bucket     --->      data  added to resource bucket   --->change to metadata triggers lambda Function ---> data added  to backup bucket
   
 This week I will continue my research on Lambda and implementation of in a scenario where it can analyze ec2 instances
 that are to be purchased from amazon when they reach a certain price point. 
