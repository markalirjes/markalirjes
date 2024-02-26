import pandas as pd
import random
df = pd.read_excel ('A.xlsx')
mylist = df ['A'].tolist ()
df1 = pd.read_excel ('B.xlsx')
mylist1 = df1 ['B'].tolist ()
df2 = pd.read_excel ('D.xlsx')
mylist2 = df2 ['D'].tolist ()
df3 = pd.read_excel ('F.xlsx')
mylist3 = df3 ['F'].tolist ()
result = []
for x in mylist:
    for y in mylist1:
        for z in mylist2:
            for q in mylist3:
                result.append([x , y , z , q])
random_items = random.choices(result, k=2)
t = random.choice(random_items)
r = random.choice(t)
print(t)
print(r)
