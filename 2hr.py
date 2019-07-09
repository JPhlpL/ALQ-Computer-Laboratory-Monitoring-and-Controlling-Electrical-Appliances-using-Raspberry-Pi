#!/usr/bin/env python

import time

import RPi.GPIO as GPIO


GPIO.setmode(GPIO.BCM)
GPIO.setup(17, GPIO.OUT)
GPIO.output(17, GPIO.LOW)
GPIO.setup(18, GPIO.OUT)
GPIO.output(18, GPIO.LOW)
GPIO.setup(22, GPIO.OUT)
GPIO.output(22, GPIO.LOW)
GPIO.setup(27, GPIO.OUT)
GPIO.output(27, GPIO.LOW)


time.sleep(10800)

GPIO.output(17, GPIO.HIGH)
GPIO.output(18, GPIO.HIGH)
GPIO.output(22, GPIO.HIGH)
GPIO.output(27, GPIO.HIGH)
