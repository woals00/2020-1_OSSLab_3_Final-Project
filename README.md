# Build a LAMP Web Server with WordPress

# What does this project do?
>이 프로그램은 Raspberry Pi에 LAMP(Linux, Apache, MySQL, PHP) 스택을 설정하고 웹 서버로 작동하도록 구성하는 프로그램입니다. WordPress를설치하고 Website를 세팅해서 Raspberry Pi와 같은 네트워크에 있으면 누구든지 접속할 수 있도록 설정할 수 있습니다. 

# What you will need
>A Raspberry Pi computer connected to the internet.

# How do I get Start?
>1. Apache 설치
>>+ Open a terminal window by selecting Accessories > Terminal from the menu.
>>+ Install the apache2 package by typing the following command into the terminal and pressing Enter:
>>"'
sudo apt-get install apche2 -y
"'

>>2. WebServer 테스트
>>+ Open Chromium by selecting Internet > Chromium Web Browser from the menu.
>>+ Enter the address http://localhost
!(apache2 default page)(C:\Users\정재민\Desktop\apache-it-works.png)
>> 이런 화면이 보인다면 apache가 잘 작동하고 있는것이다.

