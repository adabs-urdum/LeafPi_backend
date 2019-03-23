from modules.nanoleaf import Aurora
from variables import auroraList

for aurora in auroraList:
    ipAddress = aurora['ip']
    token = aurora['token']
    myAurora = Aurora(ipAddress, token)
    myAurora.on_toggle()
