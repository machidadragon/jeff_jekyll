---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2019-12-03 12:00:00 -0700
categories: jekyll update
---
          This week we continued preperation for our final project. For my role I spent time on learning LAmbda to better
understand how to check spot instance prices. I worked on this through creation of a lambda function through aws lambda 
tab. Your given different choices of blueprints for a basic lambda function. Here I chose a simple hello world example. 


Basic code format is: 

import json

def lambda_handler(event, context):
 return{
       'statusCode': 200,
      'body' : json.dumps("Hello from LAmbda")
} 

HEre you can save and test the code.  I didn't have any issues with this. 
Second I ran a lambda function that lists the s3 buckets I had. HEre is my code:
import json

import boto3

s3 = boto3.resource('s3')

def lambda_handler(event,context):
    bucket_list = []
    for bucket in s3.buckets.all():
        print(bucket.name)
        bucket_list.append(bucket.name) 
    return {
        'statusCode' : 200,
        'body': bucket_list
    }

This prints a list of all 3 buckets I have. 

Finally I created a function that sopts myec2 instances. The code is as follows:

import boto3 

client=boto3.client('ec2')
    
def lambda_handler(event, context):
     
    response=client.describe_instances()
    for reservation in response["Reservations"]:
        for instance in reservation["Instances"]:
            print(instance["InstanceId"] + "Stopping" )
        id = [instance["InstanceId"]]    
        
        client.stop_instances(InstanceIds=id)
        
    return("Completed")
 
 With this lambda function I had to add a cloudwatch trigger which was good exerience for me. All in all I feel 
I learned alot about Lambda  and how it works this week in my exploration. My next task is to find out how to check spot instance 
prices. 

