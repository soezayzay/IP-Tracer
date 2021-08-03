import requests
import os
import json
#banner
os.system("clear")
banner = """\033[1;34m
               ___ ____    ___        __ \r
              |_ _|  _ \  |_ _|_ __  / _| ___ \r
               | || |_) |  | || '_ \| |_ / _ \ \r
               | ||  __/   | || | | |  _| (_) | \r
              |___|_|     |___|_| |_|_|  \___/ \r

  \033[101m\033[1;37m Author:SoeZayZay Github: https://github.com/soezayzay  \033[0m\n
"""
print(banner)
#Input IP Address
def main():
    ip = input("\033[1;34m[\033[1;33m*\033[1;34m]\033[1;36m Enter IP address  \033[1;37m:\033[1;32m ")
    os.system("clear")
    print(banner)
    #Get json data
    req_json_data = requests.get(f"https://geo-ip.io/1.0/ip/{ip}")
    json_data_text = req_json_data.text 
    data = json.loads(json_data_text)
    print(f"\033[1;34m[\033[1;33m*\033[1;34m]\033[1;36m IP Address        \033[1;37m:\033[1;32m {data['ip']} \033[0m")
    print(f"\033[1;34m[\033[1;33m*\033[1;34m]\033[1;36m Country Code      \033[1;37m:\033[1;32m {data['country_code']} \033[0m")
    print(f"\033[1;34m[\033[1;33m*\033[1;34m]\033[1;36m Country           \033[1;37m:\033[1;32m {data['country']} \033[0m")
    print(f"\033[1;34m[\033[1;33m*\033[1;34m]\033[1;36m City              \033[1;37m:\033[1;32m {data['city']} \033[0m")
    print(f"\033[1;34m[\033[1;33m*\033[1;34m]\033[1;36m Region            \033[1;37m:\033[1;32m {data['region']} \033[0m")
    print(f"\033[1;34m[\033[1;33m*\033[1;34m]\033[1;36m Latitude          \033[1;37m:\033[1;32m {data['latitude']} \033[0m")
    print(f"\033[1;34m[\033[1;33m*\033[1;34m]\033[1;36m Longitude         \033[1;37m:\033[1;32m {data['longitude']} \033[0m")
    latitude = data['latitude']
    longitude = data['longitude']
    print(f"\033[1;34m[\033[1;33m*\033[1;34m]\033[1;36m Location          \033[1;37m:\033[1;32m https://www.google.com/maps/@{latitude},{longitude} \033[0m")
    print(f"\033[1;34m[\033[1;33m*\033[1;34m]\033[1;36m Time Zone         \033[1;37m:\033[1;32m {data['timezone']} \033[0m\n")
    main()
main()