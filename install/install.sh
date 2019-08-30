#!/usr/bin/env bash
# Supported and Tested Operating Systems:
#
# Ubuntu Versions 16.04, 18.04
#

# Detect OS
case $(head -n1 /etc/issue | cut -f 1 -d ' ') in
    Ubuntu)     os="ubuntu" ;;
    *)          os="ubuntu" ;;
esac

# Execute the installer
cd "./${os}" || fatal "Failed to change directory to ${os}"
bash "./install-${os}.sh" "${os}" "$@"

exit 0
