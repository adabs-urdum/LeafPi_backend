from modules.nanoleaf import Aurora
from variables import auroraList
import json
import sys

for aurora in auroraList:
    ipAddress = aurora['ip']
    token = aurora['token']
    myAurora = Aurora(ipAddress, token)
    step = int(sys.argv[1])
    myAurora.brightness_raise(step)
