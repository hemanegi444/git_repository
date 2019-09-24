import random
greetings=['hi','hello','hola','Hi','Hello','HELLO','Helo','HELO','HEY','Hey','Hy']
random_greetings=random.choice(greetings)
ques=['How are you?','How are you doing']
res=['okey','i am fine']
random_response=random.choice(res)
while True:
    userInput=input('you said:')
    if userInput in greetings:
        print (random_greetings)
    elif userInput in ques:
        print(random_response)
    else:
        print('i did not understand what do you said?')























