import time
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(22, GPIO.OUT)

def trigger ():
	GPIO.output(22, GPIO.LOW)

try:
    trigger()

except KeyboardInterrupt:
    print ("Quit")
    GPIO.cleanup()
