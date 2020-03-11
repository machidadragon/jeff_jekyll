---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2020-03-11 12:00:00 -0700
categories: jekyll update
---
This week I worked on creating another ebs volume.  This involves Create Volume, and 
setting it to a 1gig size,I then attached it to the instance I am running through the Aws console.
 The command is " df- h   " to show storage available. We then create an ext3 file system  with 
"sudo mkfs -t ext3 /dev/dsf " we then create a directory. From here we enter the command
 "df -h " this shows the original disk volume. We then run  " sudo mkfs -t ext3 /dev/sdf  " to 
create a new file system on the volume. We mounted the new volume with "sudo mount
 /dev/sdf /mnt/data-store" we also had to add the line echo "/dev/sdf   /mnt/data-store ext3
 defaults,noatime 1 2" | sudo tee -a /etc/fstab " This mounts the volume whenever this instance is started. We also created 
a snapshot and attached it  to our ec2.  We create a directory " sudo mkdir /mnt/data-store2"
was used to mount the volume. "sudo mount /dev/sdg /mnt/data-store2 ". was used to mount it.