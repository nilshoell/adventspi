# Adventspi

This repo contains a small webpage with five buttons and a shell script that turns on specific GPIO pins on a Raspberry Pi Zero.

It was used to control four LEDs on a digital advent wreath that where connected to the GPIO pins.

## Requirements
- Webserver (e.g. Apache): `sudo apt-get update && sudo apt-get install apache2 php -y`
- [wiringPi](http://wiringpi.com/download-and-install/) To control the GPIO pins: 
```bash
git clone git://git.drogon.net/wiringPi
cd ~/wiringPi
./build
```
## Further Information
The script can be run with `bash advent.sh <number>`, where number is between 1 and 4, turning on the respective LEDs.
On each run the pins will be configured as outputs and set to off, so if any other parameter (e.g. 0) is passed, alle LEDs will turn off.