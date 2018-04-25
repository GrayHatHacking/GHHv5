#!/bin/bash
# Using an updated version of kali-linux-2017.3-amd64.iso
# Linux kali 4.14.0-kali1-amd64 #1 SMP Debian 4.14.2-1kali1 (2017-12-04) x86_64 GNU/Linux

BASEDIR="${PWD}"

# install firmware mod kit dependencies
sudo apt-get -y install git build-essential zlib1g-dev liblzma-dev python-magic

# use git to get the firmware-mod-kit
git clone https://github.com/rampageX/firmware-mod-kit.git

# add firmware-mod-kit to the path
export PATH="${BASEDIR}/firmware-mod-kit:${PATH}"

# extract the downloaded zip (provided in this case)
unzip DAP-1320_FIRMWARE_1.11B10.zip 

# use firmware-mod-kit to extract the firmware image
#     on first use, you will see many warnings, this is normal
extract-firmware.sh DAP1320_fw_1_11b10.bin 

# you should have had a successful extraction
# change to the rootfs directory so all finds are relative to the / of the firmware
cd "${BASEDIR}/fmk/rootfs/"

# find files with executable bit set
find . -type f -perm /u+x > "${BASEDIR}/executables.txt"

# find all directories
find . -type d > "${BASEDIR}/directories.txt"

# find web technologies, you can adjust this if you wanted to add others that you know of
find . -type f -perm /u+x -name "*httpd*" -o -name "*cgi*" -o -name "*nginx*" > "${BASEDIR}/web-tech.txt"

# find the web files and configs
find . -type f -name "*.htm*" -o -name "*.js" -o -name "*.cgi" -o -name "*.conf" > "${BASEDIR}/web-files-and-cfgs.txt"

# find just the config files
find . -type f -name "*.conf" > "${BASEDIR}/cfg-files.txt"

# determine the architecture type by choosing a file, we picked busybox
file bin/busybox > "${BASEDIR}/arch-type.txt"

echo "Browse the file system and the files that were created to get an idea of what is available"
echo "    ${BASEDIR}/executables.txt"
echo "    ${BASEDIR}/directories.txt"
echo "    ${BASEDIR}/web-tech.txt"
echo "    ${BASEDIR}/web-files-and-cfgs.txt"
echo "    ${BASEDIR}/cfg-files.txt"
echo "    ${BASEDIR}/arch-type.txt"

