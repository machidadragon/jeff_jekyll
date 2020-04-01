---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2020-04-02 12:00:00 -0700
categories: jekyll update
---
    This week for my research I worked on installing https and a load balancer on 
my own vpc. I started by creating the load balancer. I used a classic type load balancer with 
two subnets one in us west 1c and one in us west1b.  For port configuration my setup had 80
forwarding to 80 and 443 with my new created certificate attached The security group allowed
traffic on 80 with a source of 0.0.0.0/0 and 443 with the same source. Certificate was created in the certificate manager. Next I went to route 53 and went to my hosted zone. Here I went into the record set I had created for my domain and changed(or added) the www A alias record to route to the loadbalancer. I did the same with the other A alias which had no name.From here I was able to access my website at https://www.lv426sitea.com (the ec2 may not be on at the time you choose to got to this link as I'm saving money.) The only thing that was odd was that the address bar says not secured even though the https://www.lv426sitea.com address works when entered. 