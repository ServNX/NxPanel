#!/usr/bin/env bash

source ../../tools/colors.sh

# Reconfigure the dash shell to use bash vs sh
header 'Reconfigure Dash'
echo "dash dash/sh boolean false" | debconf-set-selections
dpkg-reconfigure dash
success 'OK'
