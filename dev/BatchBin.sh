#!/usr/bin/bash
echo BEGIN\; > binfile
./fauxbin.py 240 123-456-789 2 1000 >> binfile
./fauxbin.py 400 456-763-345 1 1000 >> binfile
./fauxbin.py 310 453-234-674 4 1000 >> binfile
./fauxbin.py 200 231-636-323 1 1000 >> binfile
./fauxbin.py 600 233-666-334 2 1000 >> binfile
echo COMMIT\; >> binfile
