from modules.nanoleaf import Aurora
from variables import auroraList
import json

for aurora in auroraList:
    ipAddress = aurora['ip']
    token = aurora['token']
    myAurora = Aurora(ipAddress, token)
    print(json.dumps(myAurora.color_temperature))
