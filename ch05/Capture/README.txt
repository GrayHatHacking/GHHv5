The capture files are included with the names reflected the device, command, sample rate, and tuned frequency.

Ubuntu Version used in the lab:
Linux gh5-desktop 4.8.0-54-generic #57~16.04.1-Ubuntu SMP Wed May 24 16:22:28 UTC 2017 x86_64 x86_64 x86_64 GNU/Linux

Installing Pybombs,GNU Radio, and Hackrf Tools:
You will need to install GNU Radio, hackrf tools, and osmosdr tools.  The following commands will install these tools using pybombs.  While not likely an issue, pybombs will install from the head of the repositories; therefore, the actual versions will differ from what is used in the book.

    echo "Install GNU Radio"
    mkdir ~/Documents/sdr
    cd ~/Documents/sdr
    sudo apt-get update
    sudo apt-get install python-pip
    sudo pip install --upgrade pip
    sudo pip install pybombs
    pip install bitstring
    sudo pybombs recipes add gr-recipes git+https://github.com/gnuradio/gr-recipes.git
    sudo pybombs recipes add gr-etcetra git+https://github.com/gnuradio/gr-etcetera.git
    sudo pybombs prefix init ~/Documents/sdr/prefix2 -a myprefix -R gnuradio-default
    sudo pybombs install hackrf
    sudo pybombs install gr-osmosdr
    cd prefix2/
    source setup_env.sh 

Versions installed by pybombs for the exercises:
    airspy        git commit=91aeb2c7a18772b64c8e6a1d9c96b4571a5ec608
    apache-thrift git commit=53dd39833a08ce33582e5ff31fa18bb4735d6731
    bladeRF       git commit=c3eccc6d67a4d4cd6110e81ce29f568d8bd5c636
    gnuradio      git commit=0e32fcaf928e8f3f9161a619201d3cf253a46ded
    gr-iqbal      git commit=dcd73fd54992430938ced73872b983bffd770b11
    gr-osmosdr    git commit=cf9549485af61658eab3e14e0a89db80742eb547
    hackrf        git commit=9bbbbbfbfb55c60edadebdc274b6a99281f50a21
    libosmo-dsp   git commit=6561cfa8da6ddba35294ede452c1e5771b56e806
    osmo-sdr      git commit=ba4fd96622606620ff86141b4d0aa564712a735a
    rtl-sdr       git commit=e3e6ee23b7f052327bf64c6908f5c09b75029edc
    soapysdr      git commit=74f890ce73c58c37df08ea518541d3f49ffefadb
    uhd           git commit=82f0d5a6d23c6b561a17a8fa15187118b7f35f14

Included Files:
remote_analysis.grc - The flow graph for the capture

Captured Signals:
remote1-1on-4m-316mhz   
remote1-1off-4m-316mhz  
remote1-2on-4m-316mhz   
remote1-2off-4m-316mhz  
remote1-3off-4m-316mhz  
remote1-3on-4m-316mhz   
remote2-1on-4m-316mhz   
remote2-2on-4m-316mhz   
remote2-3on-4m-316mhz
remote2-1off-4m-316mhz  
remote2-2off-4m-316mhz  
remote2-3off-4m-316mhz
