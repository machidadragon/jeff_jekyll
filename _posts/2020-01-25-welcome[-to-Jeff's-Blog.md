---
layout: post
title:  "Welcome to Jeff's Blog"
date:   2020-01-25 12:00:00 -0700
categories: jekyll update
---
       Over the break I worked mainly on terraform. For our project I worked on the ansible playbook , the bastion 
and  finally lambda. Over the break I spent some time creating a vpc, subnets and security groups, and a running 
instance. I started with terraform init to intitialize the directory. I then run the file with terrafrom apply. Here is my .tf file.



variable "AWS_REGION" {    
    default = "us-west-1"
}



provider "aws" {
    region = "${var.AWS_REGION}"
}
resource "aws_vpc" "prod-vpc" {
    cidr_block = "10.0.0.0/16"
    enable_dns_support = "true" #gives you an internal domain name
    enable_dns_hostnames = "true" #gives you an internal host name
    enable_classiclink = "false"
    instance_tenancy = "default"   
    
 
}
resource "aws_subnet" "prod-subnet-public-1" {
    vpc_id = "${aws_vpc.prod-vpc.id}"
    cidr_block = "10.0.1.0/24"
    map_public_ip_on_launch = "true" //it makes this a public subnet
    availability_zone = "us-west-1b"
   
}

resource "aws_internet_gateway" "prod-igw" {
    vpc_id = "${aws_vpc.prod-vpc.id}"

}
resource "aws_route_table" "prod-public-crt" {
    vpc_id = "${aws_vpc.prod-vpc.id}"
    
    route {
        //associated subnet can reach everywhere
        cidr_block = "0.0.0.0/0" 
        //CRT uses this IGW to reach internet
        gateway_id = "${aws_internet_gateway.prod-igw.id}" 
    }
    
  
}

resource "aws_route_table_association" "prod-crta-public-subnet-1"{
    subnet_id = "${aws_subnet.prod-subnet-public-1.id}"
    route_table_id = "${aws_route_table.prod-public-crt.id}"
}


resource "aws_security_group" "ingress-all-test" {
name = "allow-all-sg"
vpc_id = "${aws_vpc.prod-vpc.id}"
ingress {
    cidr_blocks = [
      "0.0.0.0/0"
    ]
from_port = 22
    to_port = 22
    protocol = "tcp"
  }
// Terraform removes the default rule
  egress {
   from_port = 0
   to_port = 0
   protocol = "-1"
   cidr_blocks = ["0.0.0.0/0"]
 }
}

  resource "aws_instance" "example" {
  ami = "ami-0bce08e823ed38bdd"
  instance_type = "t2.micro"
  key_name = "KeystoGotham"
  security_groups = ["${aws_security_group.ingress-all-test.id}"]

subnet_id = "${aws_subnet.prod-subnet-public-1.id}"
private_ip = "10.0.1.4"    //this assigns it a static private ip
}
resource "aws_eip" "example_eip" {
  instance = "${aws_instance.example.id}"
  vpc          =  true
}

output "public_ip" {
    value = "${aws_eip.example_eip.public_ip}"
}