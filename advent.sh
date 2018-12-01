#!/bin/bash
gpio -g mode 17 out
gpio -g mode 5 out
gpio -g mode 16 out
gpio -g mode 18 out

gpio -g write 17 0
gpio -g write 5 0
gpio -g write 16 0
gpio -g write 18 0

case $1 in
        1) gpio -g write 17 1
        ;;

        2) gpio -g write 17 1
        gpio -g write 5 1
        ;;

        3) gpio -g write 17 1
        gpio -g write 5 1
        gpio -g write 16 1
        ;;

        4) gpio -g write 17 1
        gpio -g write 5 1
        gpio -g write 16 1
        gpio -g write 18 1
        ;;

esac