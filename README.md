# Hello-CSE
## Installation Instructions
PHP version 8.1 installation instructions via WSl
Step 1: Update Ubuntu System
sudo apt update && sudo apt -y upgrade
sudo systemctl reboot
Step 2: Add Ondřej Surý PPA repository
sudo apt update
sudo apt install lsb-release ca-certificates apt-transport-https software-properties-common -y
sudo add-apt-repository ppa:ondrej/php
sudo apt install php8.1
sudo apt install php8.1-mysql