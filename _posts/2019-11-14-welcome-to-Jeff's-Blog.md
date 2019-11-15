---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2019-11-14 12:00:00 -0700
categories: jekyll update
---

   For my duties this week I was supposed  to work on ssh forwarding and proxy commands. 
What this involves is first configuring the aws server to have two groups. One for the server that 
allows traffic on 443,80,22. This group needs to be modified to only allow the ssh connection
on 22 from the security group on the jumpbox to connect to the private instance. 
No changes need to be made to the first security group for the jumpbox alolowing all traffic to ssh in
to the jumpbox. Another important change that needs to be made to the config file in the ~./ssh
. THe file did not exist for me so I had to create it. Using nano I created this file and it needs to be set up
in this manner.
 Host JumpBox
   HostName 13.52.100.238
   User ec2-user
   IdentityFile key1.pem
   ProxyCommand none
Host myInstance
   HostName 10.0.1.62
   User ec2-user
   IdentityFile key1.pem
   ProxyCommand ssh JumpBox -W %h:%p

  In explaining this the ip for the jumpbox is entered in Hostname. The user is ec2-user, And the 
identityfile is where it is located on the localhost. The next host myinstance is the private instance. The
private ip is 10.0.0.1.62. The indentityfile shows where the key will be on the jumpbox.  The proxycommand 
allows you to connect through the jumpbox and go into the private instance. You can 
move through to the private instance now by entering     
ssh myinstance (which it connects thru the jumpbox then onto the myinstance)
you can also enter the command 
 ssh jumpbox  (which connects you to the jumpbox) 