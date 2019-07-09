#!/usr/bin/python
#-*-coding: utf-8-*-

import serial
import time

while True:
    ser = serial.Serial('/dev/ttyUSB0', 9600, 8, 'N', 1, timeout=1)
    output = ser.readline().strip()
    repr(output.decode('utf-8'))
    print(output.decode('utf-8'))
    fob = open('/var/www/html/Restricted/index.txt', 'w')  
    fob.write('Electric Consumption'+ repr(output.decode ('utf-8')) + '')
    fob.close()
    
    
    
    
    
    
    
    
    
    
