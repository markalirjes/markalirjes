import pandas as pd
from sklearn.preprocessing import StandardScaler
from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split
import pickle

df = pd.read_csv("acceptance.csv")

d = {'india': 0, 'china': 1, 'iran': 2,'fanland':3,'french':3}
df['nationality'] = df['nationality'].map(d)
d = {'engineer': 0, 'low': 1 ,'medicine': 2}
df['dgree'] = df['dgree'].map(d)

d = {'no': 0, 'yes': 1}
df['paper/innovation'] = df['paper/innovation'].map(d)

d = {'r': 0, 'a': 1}
df['status'] = df['status'].map(d)

X = df[["nationality","age","accepted","dgree","gpa","itels score","paper/innovation"]]

y = df["status"]

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=20)

sc = StandardScaler()
X_train = sc.fit_transform(X_train)
X_test = sc.transform(X_test)

classifier = RandomForestClassifier()

classifier.fit(X_train,y_train)

pickle.dump(classifier, open("model.pkl","wb"))

print(df.head())