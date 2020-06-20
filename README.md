# Build a LAMP Web Server with WordPress

## 동영상 링크
<https://drive.google.com/open?id=1tN1ctEsvfM590OLa7i9lGAXPfNFmCaXw>

## What does this project do?
* 이 프로그램은 Raspberry Pi에 LAMP(Linux, Apache, MySQL, PHP) 스택을 설정하고 웹 서버로 작동하도록 구성하는 프로그램입니다. WordPress를설치하고 Website를 세팅해서 Raspberry Pi와 같은 네트워크에 있으면 누구든지 접속할 수 있도록 설정할 수 있습니다. 모든 구현이 끝난 후엔 WordPress를 활용해 홈페이지 개발도 해볼 수 있습니다. 

## Why is this project useful?
* 이 프로그램을 통해 만든 자신만의 WordPress는 이런 장점을 가집니다.
1. Mobile Optimization
2. Reactive web
3. Easy usage
4. Outstanding cost-effectiveness

## What you will need
* A Raspberry Pi computer connected to the internet.

## How do I get Start?
1. Apache 설치  
* Open a terminal window by selecting Accessories > Terminal from the menu.  
* Install the apache2 package by typing the following command into the terminal and pressing Enter:  
```
sudo apt-get install apache2 -y
```

2. Web Service 테스트  
* Open the Apache default web page on your Raspberry Pi:  
	* Open Chromium by selecting Internet > Chromium Web Browser from the menu.  
	* Enter the address http://localhost

3. PHP 설치
```
sudo apt-get install php -y
```   

* 3-1. PHP테스트  
	1. index.php 만들기  
		* sudo vim index.php
	2. php content 입력해주기
 
		```
		<?php echo "hello world"; ?>
		```  

	3. index.html 삭제해주기  
		* sudo rm index.html  
		[work-well](https://projects-static.raspberrypi.org/projects/lamp-web-server-with-wordpress/40bbe4fdff0772fc22e960571225292240b37910/en/images/apache-hello-world.png)  
	 	이런 이미지를 보았다면 제대로 작동한것

4. MySQL 설치  
```
sudo apt-get install mysql-server php-mysql -y
```

```
sudo service apache2 restart
```

5. WordPress 다운로드
* go to /var/www/html/ and delete all the files in the folder.
```
cd /var/www/html/
sudo rm *
```

* download WordPress using \*\*wget\*\*
```
sudo wget http://wordpress.org/latest.tar.gz
sudo tar xzf latest.tar.gz
sudo mv wordpress/* .
sudo rm -rf wordpress latest.tar.gz
sudo chown -R www-data: .
```

6. WordPress의 Database를 setup하기
```
sudo mysql_secure_installation
```
* You will be asked \*\*Enter current password for root (enter for none)\*\*: — press Enter.
* (비밀번호를 바꾸고 싶다면)Type in Y and press Enter to
```
Set root password?.
```
* Type \*\*Y\*\* to following question.
* Create the WordPress Database
```
sudo mysql -uroot -p
```
* Type the command below
```
create database wordpress;
```
```
GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost' IDENTIFIED BY 'YOURPASSWORD';
```
```
FLUSH PRIVILEGES;
```

6. WordPress Configuration
* Open the web browser on your Pi and goto http://localhost, you should see a WordPress page asking to pick your language.
* Select your language and click Continue
* Click the Let’s go! button
* Now fill out the basic site information as follows:
```
Database Name:      wordpress
User Name:          root
Password:           <YOUR PASSWORD>
Database Host:      localhost
Table Prefix:       wp_
```
* Click Submit to proceed and click the Run the install button.
* Fill out the information: give your site a title, create a username and password, and enter your email address. Hit the Install WordPress button, then log in using the account you just created.
* Now you’re logged in and have your site set up, you can see the website by visiting your http://localhost/wp-admim

## Where can I get more help, if I need it?(출처) 
https://projects.raspberrypi.org/en/projects/lamp-web-server-with-wordpress

## 추가한 작업들
자신만의 사이트를 구성할 수 있는 방법 제시
