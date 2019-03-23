from modules.nanoleaf import Aurora
from variables import auroraList

# def printLog(*args, **kwargs):
#     print(*args, **kwargs)
#     with open('output.out','a') as file:
#         print(*args, **kwargs, file=file)

for aurora in auroraList:
    ipAddress = aurora['ip']
    token = aurora['token']
    myAurora = Aurora(ipAddress, token)
    myAurora.on = True
