<?php
system("clear");
#Author : SoeZayZay
#Github : https://github.com/soezayzay
#banner
function banner(){
echo "\e[1;34m              ___ ____    ___        __       \e[0m\n";
echo "\e[1;34m             |_ _|  _ \  |_ _|_ __  / _| ___  \e[0m\n";
echo "\e[1;34m              | || |_) |  | || '_ \| |_ / _ \ \e[0m\n";
echo "\e[1;34m              | ||  __/   | || | | |  _| (_) |\e[0m\n";
echo "\e[1;34m             |___|_|     |___|_| |_|_|  \___/ \e[0m\n";
echo "\n";
echo "  \e[101m\e[1;37m Author:SoeZayZay Github: https://github.com/soezayzay  \e[0m\n";
echo "\n";
}
#Input IP Address
function menu(){
$ip = readline("\e[1;34m[\e[1;33m*\e[1;34m]\e[1;36m Enter IP address \e[1;37m:\e[1;32m ");
echo "\n";
system("clear");
banner();
#Get json data
$json_data = file_get_contents("https://geo-ip.io/1.0/ip/$ip");
$data = json_decode($json_data);
printf("\e[1;34m[\e[1;33m*\e[1;34m]\e[1;36m IP Address       \e[1;37m:\e[1;32m $data->ip \e[0m\n");
printf("\e[1;34m[\e[1;33m*\e[1;34m]\e[1;36m Country Code     \e[1;37m:\e[1;32m $data->country_code \e[0m\n");
printf("\e[1;34m[\e[1;33m*\e[1;34m]\e[1;36m Country          \e[1;37m:\e[1;32m $data->country \e[0m\n");
printf("\e[1;34m[\e[1;33m*\e[1;34m]\e[1;36m City             \e[1;37m:\e[1;32m $data->city \e[0m\n");
printf("\e[1;34m[\e[1;33m*\e[1;34m]\e[1;36m Region           \e[1;37m:\e[1;32m $data->region \e[0m\n");
printf("\e[1;34m[\e[1;33m*\e[1;34m]\e[1;36m Latitude         \e[1;37m:\e[1;32m $data->latitude \e[0m\n");
printf("\e[1;34m[\e[1;33m*\e[1;34m]\e[1;36m Longitude        \e[1;37m:\e[1;32m $data->longitude \e[0m\n");
printf("\e[1;34m[\e[1;33m*\e[1;34m]\e[1;36m Location         \e[1;37m:\e[1;32m https://www.google.com/maps/@$data->latitude,$data->longitude \e[0m\n");
printf("\e[1;34m[\e[1;33m*\e[1;34m]\e[1;36m Time Zone        \e[1;37m:\e[1;32m $data->timezone \e[0m\n");
echo "\n\n";
menu();
}
banner();
menu();
?>
