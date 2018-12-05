#!/bin/bash

case $1 in

        # 1. Advent
        1) gpio -g write 17 1
        gpio -g write 5 0
        gpio -g write 16 0
        gpio -g write 18 0
        ;;

        # 2. Advent
        2) gpio -g write 17 1
        gpio -g write 5 1
        gpio -g write 16 0
        gpio -g write 18 0
        ;;

        # 3. Advent
        3) gpio -g write 17 1
        gpio -g write 5 1
        gpio -g write 16 1
        gpio -g write 18 0
        ;;

        # 4. Advent
        4) gpio -g write 17 1
        gpio -g write 5 1
        gpio -g write 16 1
        gpio -g write 18 1
        ;;

        # Default: turn off all LEDs
        *) gpio -g write 17 0
        gpio -g write 5 0
        gpio -g write 16 0
        gpio -g write 18 0
        ;;

esac