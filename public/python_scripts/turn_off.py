from modules.nanoleaf import setup
from modules.nanoleaf import Aurora

# def printLog(*args, **kwargs):
#     print(*args, **kwargs)
#     with open('output.out','a') as file:
#         print(*args, **kwargs, file=file)

# ipAddressList = setup.find_auroras()

ipAddressList = ['192.168.0.19']

for ipAddress in ipAddressList:
    # printLog(ipAddress)
    # token = setup.generate_auth_token(ipAddress)
    token = 'LWfCqtqvkL9sYBv1LGJtqOrOwyLhgiFt'
    # printLog(token)

    my_aurora = Aurora(ipAddress, token)
    my_aurora.on = False
    # printLog(my_aurora.effect)
