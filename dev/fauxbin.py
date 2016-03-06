#!/usr/bin/python2
import uuid
import random
import math
import time
import sys
#Takes arguaments Maxlvl UID FillRate points

bin_max = int(sys.argv[1])
bin_current = 0
uid = "bin-"+str(sys.argv[2])

fillrate = float(sys.argv[3]) #2float(raw_input("Fill Rate(Average % per sample): "))
stime = 3600#int(raw_input("Sample time(s): "))
dpoints = int(sys.argv[4])#10000int(raw_input("No samples: "))
reqtime = int(time.time()) - (dpoints*stime)
print "DELETE FROM bindata WHERE uid = '"+uid+"';"

for x in range(0, 10000):
    randp = 2*random.random()
    filla = randp*fillrate
    binp = int(100*(bin_current/bin_max))
    if binp > 100:
        bin_current=0
         
    bin_current= bin_current+filla
    reqtime = reqtime+stime
    print "INSERT INTO bindata VALUES ('"+uid+"', "+str(int(bin_current)) + ", " + str((bin_max)) + ', ' +str(reqtime) + ", 'OK');"   
    #print str(binp)+"%"
    #for x in range(0, int(100*(bin_current/bin_max))):
    #    sys.stdout.write( "#")
    
#time.sleep(0.01)
    
exit(0)
