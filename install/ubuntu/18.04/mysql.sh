#!/usr/bin/env bash

source ../../tools/colors.sh

export DEBIAN_FRONTEND=noninteractive

header "MariaDB (MySQL) Install and Setup"

# Check If Maria Has Been Installed
info 'Checking if Maria is installed ...'
if [ -f /home/nxpanel/.maria ]
then
    warning "MariaDB already installed."
    exit 0
fi

touch /home/nxpanel/.maria
chown -Rf nxpanel:nxpanel /home/nxpanel/.maria

# Remove MySQL
info 'Removing MySQL to be replaced by MariaDB ...'
apt-get remove -qq --purge mysql-server mysql-client mysql-common
apt-get autoremove -qq
apt-get autoclean -q

rm -rf /var/lib/mysql >/dev/null 2>&1
rm -rf /var/log/mysql >/dev/null 2>&1
rm -rf /etc/mysql >/dev/null 2>&1

# Add Maria PPA
info 'Adding MariaDB PPA ...'
apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xF1656F24C74CD1D8
add-apt-repository 'deb [arch=amd64,ppc64el] http://ftp.osuosl.org/pub/mariadb/repo/10.3/ubuntu bionic main'
apt-get -qq update

# Set The Automated Root Password
read -sp 'MariaDB Root Password: ' password
echo # Line Break

debconf-set-selections <<< "mariadb-server-10.3 mysql-server/data-dir select ''"
debconf-set-selections <<< "mariadb-server-10.3 mysql-server/root_password password ${password}"
debconf-set-selections <<< "mariadb-server-10.3 mysql-server/root_password_again password ${password}"

# Install MariaDB
info 'Installing MariaDB ...'
apt-get -qq install mariadb-server-10.3

# Configure Maria Remote Access
info 'Configuring Remote Access ...'
sed -i '/^bind-address/s/bind-address.*=.*/bind-address = 0.0.0.0/' /etc/mysql/my.cnf

info 'Configuring root user permissions ...'
mysql --user="root" --password="${password}" -e "GRANT ALL ON *.* TO root@'0.0.0.0' IDENTIFIED BY '${password}' WITH GRANT OPTION;"

info 'Restarting mysql service ...'
service mysql restart

info 'Setup nxpanel user and permissions ...'
mysql --user="root" --password="${password}" -e "CREATE USER 'nxpanel'@'0.0.0.0' IDENTIFIED BY '${password}';"
mysql --user="root" --password="${password}" -e "GRANT ALL ON *.* TO 'nxpanel'@'0.0.0.0' IDENTIFIED BY '${password}' WITH GRANT OPTION;"
mysql --user="root" --password="${password}" -e "GRANT ALL ON *.* TO 'nxpanel'@'%' IDENTIFIED BY '${password}' WITH GRANT OPTION;"
mysql --user="root" --password="${password}" -e "FLUSH PRIVILEGES;"

info 'Restarting mysql service ...'
service mysql restart

success 'OK'
