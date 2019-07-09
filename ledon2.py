import time
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(18, GPIO.OUT)

def trigger ():
	GPIO.output(18, GPIO.LOW)

try:
    trigger()

except KeyboardInterrupt:
    print ("Quit")
    GPIO.cleanup()
