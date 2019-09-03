#!/usr/bin/env bash

source ../../tools/colors.sh

# Disable AppArmor
header 'Disable and Remove AppArmor'
service apparmor stop
update-rc.d -f apparmor remove
apt-get -y remove apparmor apparmor-utils
success 'OK'
