{\rtf1\ansi\ansicpg1252\cocoartf1504\cocoasubrtf830
{\fonttbl\f0\fmodern\fcharset0 CourierNewPSMT;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\ri0\sl360\slmult1\partightenfactor0

\f0\fs22 \cf0 import paho.mqtt.client as mqtt\uc0\u8232 \u8232 def on_connect(client, userdata, flags, rc):\u8232    print "[+] Connection successful"\u8232    client.subscribe('#', qos = 1)  # Subscribes to all topics\u8232 \u8232 def on_message(client, userdata, msg):\u8232    print '[+] Topic: %s - Message: %s' % (msg.topic, msg.payload)\u8232 client = mqtt.Client(client_id = "MqttClient")\u8232 client.on_connect = on_connect\u8232 client.on_message = on_message\u8232 client.connect('IP GOES HERE - MASKED', 1883, 30)\u8232 client.loop_forever()}