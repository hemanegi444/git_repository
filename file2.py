from chatterbot.trainers import ListTrainer
from chatterbot import ChatBot
bot=ChatBot('T')
lt=ListTrainer(bot)
conv=open('chat.txt','r').readlines()
lt.train(conv)

while True:
    request=input('you: ')
    response=bot.get_response(request)
    print('bot:',response)
