---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2019-09-20 09:40:10 -0700
categories: jekyll update
---
 For my week of Cit DEsign we worked on creating two ansible playbooks. We created 
an ansible master and target container then installed them with the necessary 
software including python, iputils,openssh-client and nano file editor. We  then did some 
motifications to the sshd_config to permit root login.We then restarted ssh. After this we added the host 
(target) to the etc/ansible. I then pinged the target to check.Next we generated ssh keys and ssh into the
target container.It worked fine. We then created the playbooks and ran them.