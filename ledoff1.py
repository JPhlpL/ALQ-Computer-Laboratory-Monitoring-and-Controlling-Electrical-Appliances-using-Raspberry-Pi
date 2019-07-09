import time
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(17, GPIO.OUT)

def trigger ():
	GPIO.output(17, GPIO.HIGH) 
try:
	trigger()

except KeyboardInterrupt:
    print ("Quit")
    GPIO.cleanup()
