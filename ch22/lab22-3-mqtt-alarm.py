{\rtf1\ansi\ansicpg1252\cocoartf1504\cocoasubrtf830
{\fonttbl\f0\fmodern\fcharset0 CourierNewPSMT;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\deftab720
\pard\tx560\tx1120\tx1680\tx2240\tx2800\tx3360\tx3920\tx4480\tx5040\tx5600\tx6160\tx6720\pardeftab720\ri0\partightenfactor0

\f0\fs22 \cf0 import paho.mqtt.client as mqtt\uc0\u8232 \u8232 def on_connect(client, userdata, flags, rc):\u8232        print "[+] Connection success"\
\pard\pardeftab720\ri0\sl360\slmult1\partightenfactor0
\cf0        client.publish('home/alarm/set', "Disarm")\uc0\u8232 \u8232 client = mqtt.Client(client_id = "MqttClient")\u8232 client.on_connect = on_connect\u8232 client.connect('IP GOES HERE', 1883, 30)}