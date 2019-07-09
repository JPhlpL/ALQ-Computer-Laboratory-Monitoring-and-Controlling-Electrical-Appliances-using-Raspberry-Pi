import time
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
GPIO.setup(27, GPIO.OUT)

def trigger ():
	GPIO.output(27, GPIO.LOW)

try:
    trigger()

except KeyboardInterrupt:
    print ("Quit")
    GPIO.cleanup()
