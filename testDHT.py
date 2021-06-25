import sys
import Adafruit_DHT #libray
import requests
import time

url = 'https://999stock.com/iot_ht11_in.php'


while True:

    humidity, temperature = Adafruit_DHT.read_retry(11,4)
    #11 represent using DHT11 module, 4 represent DHT11's data connet on GPIO4(pin#7)
    
    time.sleep(60)

    content={'r_te':temperature,'r_hu':humidity}
    print('Temp: {0:0.1f} C Humidity: {1:0.1f}'.format(temperature,humidity))   
   
    r=requests.get(url, params = content)
