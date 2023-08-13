print("__________Calculator 1.0__________")

def get (string):

    return int(input(string))

while True :
    print('[1] sum ... : (+)')
    print('[2] Subtraction ... :(-) ')
    print('[3] Multiplication ... :(*) ')
    print('[4] Division ... : (/) ')
    print('[e] Exit program ... : ')
    print()
    commend = input('please enter : ')

    if commend == "1":
        one = get("please enter first number : ")  
        two = get("please enter second number : ")
        sum = one + two
        print()
        print(one , '+', two, '=' , sum)
        print()
    elif commend == "2":
        one = get("please enter first number : ")  
        two = get("please enter second number : ")
        sub = one - two
        print()
        print(one , '-', two, '=' , sub)
        print()
    elif commend == "3":
        one = get("please enter first number : ")  
        two = get("please enter second number : ")
        mul = one * two
        print()
        print(one , '*', two, '=' , mul)
        print()
    elif commend == "4":
        one = get("please enter first number : ")  
        two = get("please enter second number : ")
        div = one / two
        print()
        print(one , '/', two, '=' , div)
        print()
    elif commend == "e" :
        break
    else :
        print()
        print("Error !!")
        print()