import random
a = "a"
b = "b"
c = "c"
d = "d"
e = "e"
a1 = 1
b1 = 1
c1 = 1
d1 = 1
e1 = 1

i = 1
for i in range(10):
    list1 = [a , b, c ,d ,e]
    y = random.choice(list1)
    if( y == a):
        a = a1/2 
        b = b1
        c = c1
        d = d1
        e = e1
        
    if( y == b):
        a = a1
        b = b1/2
        c = c1
        d = d1
        e = e1
        
    if( y == c):
        a = a1
        b = b1
        c = c1/2
        d = d1
        e = e1
        
    if( y == d):
        a = a1
        b = b1
        c = c1
        d = d1/2
        e = e1
        
    if( y == e):
        a = a1
        b = b1
        c = c1
        d = d1
        e = e1/2
    i =+ 1