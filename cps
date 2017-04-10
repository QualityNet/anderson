#!/bin/sh
sudo apt-get update -y
apt-get install python-software-properties software-properties-common -y
sudo add-apt-repository ppa:webupd8team/java
sudo apt-get update -y
sudo apt-get install oracle-java9-installer -y
sudo apt-get update -y
sudo apt-get install curl libcurl3 libcurl3-dev php5-curl -y
service apache2 restart
cd
wget https://raw.githubusercontent.com/QualityNet/anderson/master/csp.zip
unzip csp.zip
mv -f /root/"csp" /usr/local/
cd /usr/local
chmod -R 777 csp
clear
echo -e "\033[1;31mCOMPLETADO COM SUCESSO.\033[0m"
