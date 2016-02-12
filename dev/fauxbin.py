#!/usr/bin/python2
import uuid
import random
import math
import time
import sys

bin_max = 240#int(raw_input("Max Level (cm): "))
bin_current = 0
uid = "bin-"+str(uuid.uuid4())
fillrate = 2#float(raw_input("Fill Rate(Average % per sample): "))
stime = 3600#int(raw_input("Sample time(s): "))
dpoints = 10000#int(raw_input("No samples: "))
reqtime = int(time.time()) - (dpoints*stime)

for x in range(0, 10000):
    randp = 2*random.random()
    filla = randp*fillrate
    binp = int(100*(bin_current/bin_max))
    if binp > 100:
        bin_current=0
         
    bin_current= bin_current+filla
    reqtime = reqtime+stime
    print "INSERT INTO raw-bins VALUES ("+uid+", "+str(int(bin_current)) + ", " + str((bin_max)) + ", OK, " + str(reqtime) + ");"   
    #print str(binp)+"%"
    #for x in range(0, int(100*(bin_current/bin_max))):
    #    sys.stdout.write( "#")
    
#time.sleep(0.01)
    
exit(0)
