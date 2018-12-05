#!/bin/bash

# Check if wiringPi is installed
if ! [ -x "$(command -v gpio)" ]; then
    echo "Error: wiringPi is not installed." >&2
    exit 1
fi

# Set the 4 GPIO Pins to output
gpio -g mode 17 out
gpio -g mode 5 out
gpio -g mode 16 out
gpio -g mode 18 out

# Turn all LEDs off
gpio -g write 17 0
gpio -g write 5 0
gpio -g write 16 0
gpio -g write 18 0

# Turn on first LED as startup indicator
gpio -g write 17 1

for (( ; ; ))
do
    if [ "$(pidof apache2)" ]; then
        echo "Started apache server." >&2
        gpio -g write 5 1
        break
    fi
    echo "Error: apache has not started." >&2
    sleep 5
done

# Rest of startup cycle
gpio -g write 16 1
sleep 1
gpio -g write 18 1

# Blink LEDs three times
for i in 1 2 3
do

    gpio -g write 17 1
    gpio -g write 5 1
    gpio -g write 16 1
    gpio -g write 18 1

    sleep 1

    gpio -g write 17 0
    gpio -g write 5 0
    gpio -g write 16 0
    gpio -g write 18 0

    sleep 1
   
done

gpio -g write 17 0
gpio -g write 5 0
gpio -g write 16 0
gpio -g write 18 0

exit 0