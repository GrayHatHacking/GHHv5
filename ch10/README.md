# Install instructions for Chapter 10

**For our Kali image, please use a Kali 32 bit image**
If you want to use the 64 bit image, you will need to follow the instructions here: : http://passing-the-hash.blogspot.com/2013/04/pth-toolkit-for-kali-interim-status.html


**Create a windows 10 VM**

On installation, when it prompts for your user, name it “user” with a password of “Password1”
 
**Configure the system**

Open a command prompt as Administrator by pressing the windows key, typing in cmd and then right clicking on the cmd program and choosing run as Administrator.
Run the following commands. Note this will reboot your system when it is done configuring it.

```
c:\> netsh advfirewall set allprofiles state off
c:\> winrm quickconfig
c:\> winrm set winrm/config/service/auth @{Basic="true"}
c:\> winrm set winrm/config/service @{AllowUnencrypted="true"} –TE hlinn
c:\> reg.exe ADD HKLM\SOFTWARE\Microsoft\Windows\CurrentVersion\Policies\System /v EnableLUA /t REG_DWORD /d 0 /f
c:> shutdown /r /d p:2:4 /t 5
```
