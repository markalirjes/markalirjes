import sklearn
from sklearn.utils import shuffle
from sklearn.neighbors import KNeighborsClassifier
import pandas as pd
import numpy as np
from sklearn import preprocessing

data = pd.read_csv("file.csv")
print(data.head())

le = preprocessing.LabelEncoder()

favorite = le.fit_transform(list(data["favorite"]))
bestjob = le.fit_transform(list(data["best job"]))
highscore = le.fit_transform(list(data["high score"]))

x = list(zip(highscore , bestjob))
y = list(favorite)

x_train , x_test , y_train , y_test = sklearn.model_selection.train_test_split(x , y , test_size=0.1)

model = KNeighborsClassifier(n_neighbors=7)
model.fit(x_train, y_train)

acc = model.score(x_test , y_test)

predicted = model.predict(x_test)

clas = ["economics","eecs","history"]

for x in range(len(predicted)):
    print("pred:", clas[predicted[x]], "real:" ,clas[ y_test[x]])