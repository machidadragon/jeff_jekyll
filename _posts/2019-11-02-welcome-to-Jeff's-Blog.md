---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2019-11-02 12:00:10 -0700
categories: jekyll update
---


  During this week we worked on terraform and installing a hugo blog through ansible.My team responsibility was to create the
blog. I startedby installing hugo into the C: drive. I then entered these commands:
Hugo new site blog1 //Creates the blog and necessary files. 

Cd into the blog1, and examine config.toml file. This file is to be replaced with the downloaded theme file config
Next I changed to the theme directory and ran the command:

git clone https://github.com/antonpolishko/hugo-stellar-theme  .This downloads the hugo space theme and necessary files.

After this you CD into hugo-stellar-theme, cd into examplesite and copy the config file.
This file replaces the config  file in your blog1 directory.Copy paste it into the config.toml file in blog directory.It gives the theme configs and allow you to
change the parrameters of the site. 

Next we run the command:
hugo serve -D 

This runs the included hugo server. Now navigate to browser address localhost:1313 and view
your newly created blog. 

