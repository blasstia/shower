#!/usr/bin/python     
#coding=utf-8

import time 
import RPi.GPIO as GPIO 

# relay 測試
LED_PIN1=14
LED_PIN2=15
LED_PIN3=18
LED_PIN4=23
GPIO.setmode(GPIO.BCM) 
GPIO.setup(LED_PIN1,GPIO.OUT) 
GPIO.setup(LED_PIN2,GPIO.OUT) 
GPIO.setup(LED_PIN3,GPIO.OUT) 
GPIO.setup(LED_PIN4,GPIO.OUT) 

#oepn
GPIO.output(LED_PIN1,GPIO.HIGH)
GPIO.output(LED_PIN2,GPIO.HIGH)
GPIO.output(LED_PIN3,GPIO.HIGH)
GPIO.output(LED_PIN4,GPIO.HIGH)
time.sleep(2)
# #close
GPIO.output(LED_PIN1,GPIO.LOW)
GPIO.output(LED_PIN2,GPIO.LOW)
GPIO.output(LED_PIN3,GPIO.LOW)
GPIO.output(LED_PIN4,GPIO.LOW)
time.sleep(1)
GPIO.cleanup()
