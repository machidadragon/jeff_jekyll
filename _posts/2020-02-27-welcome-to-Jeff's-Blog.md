---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2020-02-27 12:00:00 -0700
categories: jekyll update
---



This week I worked on adding elastic beanstock and EBS storage. Elastic beanstalk is an aws service 
that allows you to deploy and application and monitor it. Load balancing and auto scaling is included. 
This is done throught using the aws management console and selecting Elastic Beanstalk. Here we 
downloaded  sample application (tomcat) and uploaded and deployed them to beanstalk. Next by 
clicking on instances you can see the load balancer and auto scaling are working. 

The second part we worked on was creating and mounting Elastic Block storge to our EC2. This is 
done by clicking on the aws console for volumes. You then create a volume. Here we can create tags 
and choose size 1gb to 16tb. We then attach the volume by going to instance and select attach.
We then connected to the instnce through the use of putty. Here we downloaded putty and set it up
using the ec-2 user and instance public dns. We logged on and configured our file system. 
we ran commnds df -h which shows the storage on the instance. We then created a ext3 file system 
on the volume. We then created a directory sudo mkdir /mnt/data-store  then we mounted the volume 
sudo mount /dev/sdf /mnt/data-store   We then ensured the mount with cat /etc/fstab and finally df -h
We then added some text to the file to ensure it works. sudo -c "echo some text has been written  > /mnt
/data-store/file.txt"You then can check ny entering cat /mnt/data-store/file.txt  We then created a snap-shot
This is done by going to your volumes and selecting the created volume.Select it and then create a snapshot.
We then checked to make sure the snapshot worked by removing the old storage and using the snap-shot. 