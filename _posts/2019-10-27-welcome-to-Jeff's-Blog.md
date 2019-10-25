---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2019-10-27 12:00:10 -0700
categories: jekyll update
---



 For out team collaboration this week we worked on Creating a hugo blog. This involves an
opening command of "hugo new site name" , which once hugo is installed generates the necessary 
binaries. I then created a post directory to store the active posts. This post folder currently resides 
under content. Posts must be in the .md format to display correctly. Once Posts have been 
created you run the built in hugo server by the command " hugo server -D" . To further customize 
I added a theme from github with the command git clone https://github.com/Zenithar/hugo-theme-bleak.git
I finally ran the updated site by running a command of "hugo server --theme=hugo-theme-bleak --buildDrafts"
From here I tested the changes by going tpo localhost :1313 to view the updated site. 

Issues encountered include: An issue effectively dispaying the theme. In hindsight it 
seems it was an issue with my config syntax. After multiple searches I located the solution and the website
was properly displayed. 


