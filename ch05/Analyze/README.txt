Installation of inspectrum:
The captures from Lab 5-2 can be used in the event that you don’t have an SDR with the remote.

You will need to have git in order to clone the repositories, but everything else should be included in the following commands:

    sudo apt-get install qt5-default libfftw3-dev cmake pkg-config 
    sudo apt-get install automake
    git clone https://github.com/miek/inspectrum.git
    git clone git://github.com/jgaeddert/liquid-dsp.git
    cd liquid-dsp/
    ./bootstrap.sh 
    ./configure 
    make
    sudo make install
    cd ..
    cd inspectrum/
    mkdir build
    cd build/
    cmake ..
    make
    sudo make install


cmds.txt - The commands entered into the ipython console
decode-inspectrum.py - The decoding function from lab 5-4
