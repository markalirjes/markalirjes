#Today, in the political economy class, the professor said: After the redistribution of income, political power will decrease, but not to what extent
#So I decided to write an exponential function for this reason and show this
import numpy as np
import matplotlib.pyplot as plt
t = np.arange(-3,3,0.001)
ampli = 4*np.exp(t)
plt.plot(t,ampli)
plt.grid()
plt.show()