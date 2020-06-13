# Build a LAMP Web Server with WordPress

## What does this project do?
* 이 프로그램은 Raspberry Pi에 LAMP(Linux, Apache, MySQL, PHP) 스택을 설정하고 웹 서버로 작동하도록 구성하는 프로그램입니다. WordPress를설치하고 Website를 세팅해서 Raspberry Pi와 같은 네트워크에 있으면 누구든지 접속할 수 있도록 설정할 수 있습니다. 

## What you will need
* A Raspberry Pi computer connected to the internet.

## How do I get Start?
1. Apache 설치  
*Open a terminal window by selecting Accessories > Terminal from the menu.  
*Install the apache2 package by typing the following command into the terminal and pressing Enter:  
*커맨드 : sudo apt-get install apache2 -y

2. Web Service 테스트  
*Open the Apache default web page on your Raspberry Pi:  
	*Open Chromium by selecting Internet > Chromium Web Browser from the menu.  
	*Enter the address http://localhost

3. PHP 설치  
*커맨드 : sudo apt-get install php -y  
>3-1. PHP테스트  
>1. index.php 만들기  
> * sudo vim index.php
>2. php content 입력해주기  
> * ex) <?php echo "hello world"; ?>  
>3. index.html 삭제해주기  
> * sudo rm index.html  
![work-well](https://projects-static.raspberrypi.org/projects/lamp-web-server-with-wordpress/40bbe4fdff0772fc22e960571225292240b37910/en/images/apache-hello-world.png) 
> 이런 이미지를 보았다면 제대로 작동한것
