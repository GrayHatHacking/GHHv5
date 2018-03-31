{\rtf1\ansi\ansicpg1252\cocoartf1504\cocoasubrtf830
{\fonttbl\f0\fmodern\fcharset0 CourierNewPSMT;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\deftab720
\pard\tx560\tx1120\tx1680\tx2240\tx2800\tx3360\tx3920\tx4480\tx5040\tx5600\tx6160\tx6720\pardeftab720\ri0\partightenfactor0

\f0\fs22 \cf0 import shodan\uc0\u8232 import time\u8232 import os\u8232 \u8232 def shodan_search():\u8232 \u8232 	SHODAN_API_KEY = "9G19LLaQUJCWrlE0FNDGUY-MASKED"\u8232 	SEARCH = "mqtt alarm"\u8232 	api = shodan.Shodan(SHODAN_API_KEY)\u8232 \u8232 	try:\u8232 		results = api.search(SEARCH)\u8232                 file1 = open("mqtt-results.txt", "w")\u8232         	for result in results['matches']:\u8232 			searching = result['ip_str']\u8232                         file1.write(searching + '\\n')\u8232 			file1.close()\u8232 	except shodan.APIError, e:\u8232 		pass\u8232 \
\pard\pardeftab720\ri0\sl360\slmult1\partightenfactor0
\cf0 shodan_search()}