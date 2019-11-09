---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2019-11-08 12:00:00 -0700
categories: jekyll update
---


    We continued work on terraform and setting up a hugo blog. My next task after 
creating the hugoblog and working 0on the ansible file to ssh in 
"ssh -i "key " ec2-user@54.153.53.216.
Here we could use   - name: Copy file to ec-2 jumpbox shell: sftp -i key ec2-user@13.52.100.238
shell: put key   
This copies the file to the ec2 and allows transfer of a key. We can then ssh from
(jumpbox) to the actual ec-2 instance we need.  The who process involved modifying security
groups one to allow only the jumpbox IP in and one(jumpbox) to allow ssh traffic in.This makes 
sure the ec-2 can only be accessed from the jumpbox. YOu also need to create a new key pair to
get into the jumpbox. Then the other keys(for ec-2 instance) are sftp over to the jumpbox and 
are used to enter the ec-2 instance. 
Some issues I have encountered were:
    Setting up security config to allow public subnet to be accessed only through jumpbox. 
    I also ran into the issue of how to get the key to the jumpbox. I resolved this by using 
sftp. This completes my weekly assignment of creating and configuring the bastion host.
   

Concerns:
   Need to research securing the bastion host..  