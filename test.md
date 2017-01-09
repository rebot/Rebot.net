# Project Speeddating

> By Ruben Moortgat and Gilles Trenson

The speeddating sector is moving toward an online service provider. To catch up with the changing trend, we try to combine the best of both worlds. This project is an attempt to train a neural network to mimic a speeddating event, which we believe is still an interesting way to get to know a partner. The physical appearance is by far the most influencing factor to choose a partner online. Dating apps like [Tinder](https://www.gotinder.com) are focussed on this factor. Our solution tries to incorporate more influencing factors into a matchmaking algorithm based on general trend learned out of a big speeddating dataset.

## 1\. Setup

<span style="color:red;">IMPORTANT</span>: The user of the software should make sure all packages are installed on his/her device. Python `3.5.2` was used throughout the project. To install the required packages, navigate to the base folder (where the file 'requirements.txt' is located) and run the following command.

```
pip install -r requirements.txt
```

Once all packages are installed, feel free to run the code and make adjustments.

## 2\. Matchmaking system

The software is divided into 2 pieces. Futhermore, there are some examples included where the use of [Tensorflow](https://www.tensorflow.org), an open source machine learning tool, is demonstrated. Make sure you [download](https://www.tensorflow.org/get_started/os_setup) and setup the right binary package of Tensorflow for your operating system.

### 2.1\. Training the neural network

To run the neural network process, navigate to the base folder and execute the following command:

```
python Speeddating_using_neurolab.py
```

It does the following:

- Loads the correct datafile in the program, located relative to the base folder in the following path: `Dataset/Speed_Dating_Data.csv`
- Preprocesses the data using the Python package _Pandas_. In a matter of seconds, incomplete records are thrown out of the dataset and a 2 subsets are created. One containing all personal information about males and the other about females.
- Select the important features and combine those features of the male and female of a particular date. Finally, append this data to the dataset that will feed the neural network. The neural network is made using [NeuroLab](https://pythonhosted.org/neurolab/) - a library of basic neural networks algorithms. It's a simple pure python package but at cost of speed.
- Trains the neural network.
- Output, 3 files:

  - `Dataset/MaleData.csv` if it doesn't already exists. This file contains all the personal data of the men
  - `Dataset/FemaleData.csv` if it doesn't already exist. This file contains all the personal data of the women
  - `Dataset/relativeimportances.txt` every time this file is executed. This file contains all the importances out of the neural network that are fed to the matchmaking system.

The 3 files that are created by `Speeddating_using_neurolab.py` are used in the second piece of the software. If the 3 files are present in the documentation, it isn't really necessairy to execute speeddating_using_neurolab.py beforehand.

### 2.2\. Simulate a Matchmaking session

If the folder `Dataset/` contains `relativeimportances.txt`, `MaleData.csv` and `FemaleData.csv`, then it's not necessary to rerun `Speeddating_using_neurolab.py`. You can simply proceed to the Matchmaking session.

```
python MatchmakingSystem.py
```

It does the following:

- Loads the data from `Dataset/MaleData.csv`, `Dataset/FemaleData.csv` and `Dataset/relativeimportances.txt` into the program.
- Asks the user to specify the person for whom a match has to be found. The user can also choose to find a date for his-/herself. In the latter case the user has to fill in a form.
- The matchmaking system finds the best match(es) for the person. the user can specify how many best matches he/she wants
- Output:

  - Prints the best matches for the specified person.

### 2.3\. Further documentation

All documentation necessary for this project is provided in the file Dataset. it contains:

- `MaleData.csv` (if this is deleted, executing `Speeddating_using_neurolab.py` will restore it)
- `FemaleData.csv` (if this is deleted, exectuting `Speeddating_using_neurolab.py` will restore it)
- `relativeimportances.txt` (if this is deleted, executing `Speeddating_using_neurolab.py` will calculate the importances all over)
- `Speed_Dating_Data.csv` (used by `Speeddating_using_neurolab.py`. This file contains all dating info used in this project)
- `Speed Dating Data Key.docx` (belongs to `Speed_Dating_Data.csv` and contains all background information for necessary to understand this file)
- This `readme.md`

## 3\. Work on progress \[Experimental\]

In order to improve the matchmaking system both in performance (speed) and accuracy, we went looking for an other solution. TensorFlow's high-level machine learning API (tf.contrib.learn) seems to fit most of our requirements. It makes machine learning models easy to configure, train, and evaluate, although it was quite difficult and complicated to get a good insight in our graph. A good [tutorial](https://www.tensorflow.org/tutorials/wide/) is available which helps to solve a binary classification problem, which was exactly what we were looking for.

### 3.1\. Experiment 1 - Predict _gender_ out of personal data

This experiment is included in `Personal_data.py`. To run the python script, execute the following command.

```
python Personal_data.py
```

When the file is done executing, the result will be printed in your command window. The first line of the output should be something like `accuracy: 0.841522`, which means the accuracy is 84.15%. The model is saved in the `tmp/` folder. Each time the files gets executed, it uses the model of the previous time and trains again. After some time, overfitting starts occurring. It's recommended to not rerun the file more than 3 times without removing the `tmp/` folder.
