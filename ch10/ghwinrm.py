#!/usr/bin/python
import winrm
import argparse
import sys

parser = argparse.ArgumentParser(description='Run commands using WinRM.')
parser.add_argument('-c', action="store_true", default=False,
  help='arguments will be a command')
parser.add_argument('-p', action="store_true", default=False,
  help='arguments will be powershell')
parser.add_argument('-f', type=argparse.FileType('rt'),
  help='filename with powershell to be executed')
parser.add_argument('-U', action="store", required=True,
  help='username with format DOMAIN\USER%Password')
parser.add_argument('-t', action="store", required=True,
  help='target hostname')
parser.add_argument('args', nargs=argparse.REMAINDER,
  help='code to be executed or powershell to run')

args = parser.parse_args()

if not args.c and not args.p:
    print "You must specify either a -c or a -p to execute code"
    sys.exit
username,password = args.U.split("%",2)
ses = winrm.Session(args.t,auth=(username,password))
if args.c:
    if args.f:
        data = args.f.read()
        lines = data.split("\n")
        for line in lines:
            if len(str.rstrip(line)) < 1:
                continue
            arglist = str.rstrip(line).split(" ")

            cmd = arglist.pop(0)
            res = ses.run_cmd(cmd,arglist)
            print res.std_out
    else:
        cmd = args.args.pop(0)
        res = ses.run_cmd(cmd,args.args)
        print res.std_out

elif args.p:
    if args.f:
        script = args.f.read()
        res = ses.run_ps(script)
        print res.std_out
    else:
        script =" ".join(args.args)
        res = ses.run_ps(script)
        print res.std_out


        
