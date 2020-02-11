---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2020-02-10 12:00:00 -0700
categories: jekyll update
---

                This week I added s3 access to an EC2. I did this by going into the awsconsole and chose roles. Here I created a new 
role and added s3 access. After starting up my ec2 I entered the command "aws s3 ls " which will list the s3 containers 
in your aws account. I then createdaEBS and mounted it. You do this by going to aws Ec2 heading, go to volumes and 
create one, then right click on it to attach it to the instance. This will give the Ec2 extra storage. I then entered the
 command "mkfs -t ext4 /dev/xvdf ". I then created a new directory "mkdir /newstorage", then mount it 
"mount /dev/xvdf /newstorage/" then finally "df -hT". After this go into the VI editor "vi /etc/fstab". Here add the line 
"/dev/xvdf /newstorage ext4 defaults, nofail, 0 0" , save the file and then enter "mount -a" This completes the EBS mount
 needed for the lab of adding the extra storage.



