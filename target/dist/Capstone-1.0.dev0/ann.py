import numpy as np
import matplotlib.pyplot as plt
import pandas as pd

import keras
from keras.models import Sequential
from keras.layers import Dense

from sklearn.preprocessing import LabelEncoder, OneHotEncoder
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.metrics import confusion_matrix



def conf_mat(y_test, y_pred):
	from sklearn.metrics import confusion_matrix
	cm = confusion_matrix(y_test, y_pred)
	return cm


def main():	
	# Importing the dataset
	dataset = pd.read_csv(r"D:\Study\projects\income_class_classification\Capstone\src\main\resources\family.csv")
	X = dataset.iloc[:, [0,1,3,25,26,27,28,29,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59]].values
	y = dataset.iloc[:, [2]].values

	# Encoding categorical data
	from sklearn.preprocessing import LabelEncoder, OneHotEncoder
	labelencoder_X_1 = LabelEncoder()
	X[:, 1] = labelencoder_X_1.fit_transform(X[:, 1])
	labelencoder_X_2 = LabelEncoder()
	X[:, 2] = labelencoder_X_2.fit_transform(X[:, 2])
	labelencoder_X_3 = LabelEncoder()
	X[:, 3] = labelencoder_X_3.fit_transform(X[:, 3])
	labelencoder_X_5 = LabelEncoder()
	X[:, 5] = labelencoder_X_5.fit_transform(X[:, 5])
	labelencoder_X_6 = LabelEncoder()
	X[:, 6] = labelencoder_X_6.fit_transform(X[:, 6])
	labelencoder_X_7 = LabelEncoder()
	X[:, 7] = labelencoder_X_7.fit_transform(X[:, 7])
	labelencoder_X_8 = LabelEncoder()
	X[:, 8] = labelencoder_X_8.fit_transform(X[:, 8])
	labelencoder_X_13 = LabelEncoder()
	X[:, 13] = labelencoder_X_13.fit_transform(X[:, 13])
	labelencoder_X_14 = LabelEncoder()
	X[:, 14] = labelencoder_X_14.fit_transform(X[:, 14])
	labelencoder_X_15 = LabelEncoder()
	X[:, 15] = labelencoder_X_15.fit_transform(X[:, 15])
	labelencoder_X_19 = LabelEncoder()
	X[:, 19] = labelencoder_X_19.fit_transform(X[:, 19])
	labelencoder_X_20 = LabelEncoder()
	X[:, 20] = labelencoder_X_20.fit_transform(X[:, 20])
	labelencoder_X_22 = LabelEncoder()
	X[:, 22] = labelencoder_X_22.fit_transform(X[:, 22])

	onehotencoder = OneHotEncoder(categorical_features = [1,2,3,5,6,7,8,13,14,15,19,20,22])
	X = onehotencoder.fit_transform(X).toarray()


	#Scaling the output parameter
	df = pd.DataFrame(y)
	mean = df.mean(axis=0)

	y = (np.where(y>mean[0],1,0))


	# Splitting the dataset into the Training set and Test set
	from sklearn.model_selection import train_test_split
	X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.2, random_state = 0)

	# Feature Scaling
	from sklearn.preprocessing import StandardScaler
	sc = StandardScaler()
	X_train = sc.fit_transform(X_train)
	X_test = sc.transform(X_test)

	# Part 2 - Now let's make the ANN!
	# Initialising the ANN
	classifier = Sequential()

	# Adding the input layer and the first hidden layer
	classifier.add(Dense(units = 75, kernel_initializer = 'uniform', activation = 'relu', input_dim = 148))

	# Adding the second hidden layer
	classifier.add(Dense(units = 75, kernel_initializer = 'uniform', activation = 'relu'))

	classifier.add(Dense(units = 75, kernel_initializer = 'uniform', activation = 'relu'))

	# Adding the output layer
	classifier.add(Dense(units = 1, kernel_initializer = 'uniform', activation = 'sigmoid'))

	# Compiling the ANN
	classifier.compile(optimizer = 'adam', loss = 'binary_crossentropy', metrics = ['accuracy'])

	# Fitting the ANN to the Training set
	classifier.fit(X_train, y_train, batch_size = 10, epochs = 100)



	#y_pred = classifier.predict(X_test)
	#y_pred = (y_pred > 0.5)

	#cm = conf_mat(y_test, y_pred)
