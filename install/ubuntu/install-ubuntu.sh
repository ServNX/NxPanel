#!/usr/bin/env bash
export DEBIAN_FRONTEND=noninteractive

# Includes
source ../tools/colors.sh

# Variables
base_dir='../../..'
os=$1
release="$(lsb_release -s -r)"
env="${base_dir}/.env"
backups="/root/install_backups/$(date +%s)"
software="nano ntp ntpdate"

# Change directory to the appropriate os release version
# All Paths are relative to the release number
cd "$release" || fatal "Failed to change directory to $release"

# Am I root?
if [ "x$(id -u)" != 'x0' ]; then
  echo 'Error: this script can only be executed by root'
  exit 1
fi

# If this is the first run, and not contiunuing after a reboot
if [ ! -f "/root/.continue" ]; then
  # Create Install backup directory
  mkdir -p "${backups}"

  header 'nxpanel user and group' 'We are checking to see if the nxpanel user and group exists'
  # Check nxpanel user account
  info 'Checking nxpanel user ...'
  if [ ! -z "$(grep ^nxpanel: /etc/passwd)" ]; then
    warning 'nxpanel user already exists'
    info 'Removing nxpanel account ...'
    chattr -i /home/nxpanel/conf >/dev/null 2>&1
    userdel -f nxpanel >/dev/null 2>&1
    chattr -i /home/nxpanel/conf >/dev/null 2>&1
    mv -f /home/nxpanel "${backups}/home/" >/dev/null 2>&1
    rm -f /tmp/sess_* >/dev/null 2>&1
  fi

  # Check nxpanel group
  info 'Checking nxpanel group ...'
  if [ ! -z "$(grep ^nxpanel: /etc/group)" ]; then
    warning 'nxpanel group already exists'
    info 'Removing nxpanel group ...'
    groupdel nxpanel >/dev/null 2>&1
  fi
  success 'OK'

  # Prepare the .env file
  header 'Environment Setup'
  if [ ! -f "$env" ]; then
    info 'Preparing .env file ...'
    cp ${base_dir}/.env.example $env
  fi
  success 'OK'

  # Administrator Questions
  header "Administrator Information" "This information will be used for the admin account"
  echo 'Username: admin'
  read -p 'Name: ' admin_name
  read -p 'Email: ' admin_email
  read -sp 'Password: ' admin_password
  echo # Line break

  # Write the varaibles to the .env file
  {
    echo -e "\nOS=${os^}" # Capitalize the first character
    echo -e "\nADMIN_NAME=${admin_name}"
    echo "ADMIN_EMAIL=${admin_email}"
    echo "ADMIN_PASSWORD=${admin_password}"
  } >>$env
  success 'OK'

  # Update and Upgrade
  header 'Update and Upgrade your system'
  # Create backup & Replace the sources.list with our own
  mv /etc/apt/sources.list "${backups}/etc/apt/" >/dev/null 2>&1
  cp ./templates/sources.list /etc/apt/sources.list >/dev/null 2>&1

  # Update and Upgrade the system
  apt-get -qq update
  apt-get -qq upgrade
  success 'OK'

  # Promt to Reboot
  header 'A reboot is suggested at this time.' "If you choose to reboot now you will not lose\n your place when you run the installer again."
  touch /root/.continue >/dev/null 2>&1 # Create a file as a check point
  read -p "Would you like to reboot now ? " -n 1 -r
  echo # Line break

  if [[ $REPLY =~ ^[Yy]$ ]]; then
    info 'Rebooting in 5 seconds ...'
    sleep 5
    success 'OK'
    echo # Line Break
    reboot
  else
    warning 'Continuing without rebooting may cause undesired results'
  fi

fi

# Continue the install process
header 'Continue Install' "This will modify your system and install software"
read -p "Continue with install ? " -n 1 -r
echo # Line break

if [[ $REPLY =~ ^[Yy]$ ]]; then
  success 'OK'
  sleep 5
else
  warning "You have canceled the installer.\n You can continue the installer from this point byu simply running the installer again."
  exit 0
fi

echo # Line Break

steps=(
  users_groups
  dash
  apparmor
  mysql
)

for step in "${steps[@]}"; do
  bash "./${step}.sh"
done

exit 0
