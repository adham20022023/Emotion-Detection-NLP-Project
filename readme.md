## Introduction
In this project, we aim to build a model that can detect the emotion of a given text input. We have used various machine learning and deep learning models for this task, along with preprocessing techniques and over-sampling techniques to improve the performance of the models. We have also deployed the best performing model using an API built with Flask.

## Dataset
The dataset used in this project is the Emotions Dataset for NLP available on Kaggle at the following link: https://www.kaggle.com/datasets/praveengovi/emotions-dataset-for-nlp. The dataset consists of text inputs labeled with six emotions: anger, fear, joy, love, sadness, and surprise.

## Preprocessing
We have performed several preprocessing techniques on the dataset to improve the quality of the input data, including:

- Text cleaning: removing special characters, numbers, and punctuation marks.
- Tokenization: splitting the text into individual words or tokens.
- Stop word removal: removing common words that are not useful for the analysis.
- Lemmatization: reducing words to their base form.

## Models
We have experimented with several machine learning and deep learning models for this task, including:

- Naive Bayes
- Decision Tree
- Random Forest
- Logistic Regression
- Support Vector Machine (SVM)
- k-Nearest Neighbors (KNN)
- XGBoost
- Recurrent Neural Network (RNN)

## Over-sampling
As the dataset is imbalanced, with some emotions having more examples than others, we have used over-sampling techniques with the imblearn library to balance the dataset and improve the performance of the models.

## Model Deployment
The best performing model, which is the RNN model, has been deployed using an API built with Flask. The API can be used to predict the emotion of a given text input.

## Conclusion
This project demonstrates the use of various machine learning and deep learning models for emotion detection, along with preprocessing and over-sampling techniques to improve the performance of the models. The best performing model has been deployed using an API built with Flask, which can be used to predict the emotion of a given text input. Please feel free to use this project as a resource or contribute to it by submitting a pull request.

## Result

<img width="418" alt="Screenshot 2023-09-18 143807" src="https://github.com/adham20022023/Emotion-Detection-NLP-Project/assets/90427660/99a3dc4b-fb92-45ba-8008-dc19243a23b7">








