import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.pipeline import Pipeline
from sklearn.compose import ColumnTransformer
from jcopml.pipeline import num_pipe, cat_pipe
df = pd.read_csv("data/dataset1.csv")
print (df)

X = df.drop(columns="lulus")
y = df.lulus

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)
X_train.shape, X_test.shape, y_train.shape, y_test.shape

preprocessor = ColumnTransformer([
    ('numeric', num_pipe(), ["ipk"]),
    ('categoric', cat_pipe(encoder='onehot'), ['jenis_kelamin', 'pekerjaan', 'status']),
])

from sklearn.naive_bayes import GaussianNB
pipeline = Pipeline([
    ('prep', preprocessor),
    ('algo', GaussianNB())
])
print(pipeline)
pipeline.fit(X_train, y_train)
data = pipeline.fit(X_train, y_train)
print(data)
pipeline.score(X_train, y_train)
pipeline.score(X_test, y_test)
from jcopml.plot import plot_confusion_matrix
plot_confusion_matrix(X_train, y_train, X_test, y_test, pipeline)
X_pred = pd.read_csv("data/testing.csv")
print(X_pred)
pipeline.predict(X_pred)
X_pred["lulus"] = pipeline.predict(X_pred)
print(X_pred)