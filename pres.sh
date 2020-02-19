#!/bin/bash

gpio mode 0 up
gpio mode 1 out
while [ true ]; do
        if [ `gpio read 0` -eq "0" ]; then
        gpio write 1 0
        sleep 0.3;
#        echo "button press"
#       php panic.php > /var/log/pres.log
	php index.php tools panic
        else
        gpio write 1 1
        fi
done

