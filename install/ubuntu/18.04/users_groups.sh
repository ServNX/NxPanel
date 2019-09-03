#!/usr/bin/env bash

source ../../tools/colors.sh

header "Users and Groups" "Here we will setup any Users and/or Groups that are required"
adduser --disabled-password --gecos "" nxpanel
success 'OK'
