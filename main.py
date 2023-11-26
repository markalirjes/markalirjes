import torch
from torch import nn
import matplotlib.pyplot as plt
weight = 0.6
bias = 0.1

start = 0
end = 1
step = 0.03

X = torch.arange(start , end , step).unsqueeze(dim = 1)
Y = weight * X + bias

train_split = int(0.8 * len(X))
X_train , Y_train = X[:train_split] , Y[:train_split]
X_tset , Y_test = X[train_split:], Y[train_split:]

def plot(train_data = X_train , train_label=Y_train , test_data = X_tset , test_label = Y_test , prediction = None):
    plt.scatter(train_data , train_label , c="r", s=4 , label = "Train Data")
    plt.scatter(test_data, test_label, c="g", s=4, label="Test Data")
    if prediction is not None:
        plt.scatter(test_data, prediction, c="b", s=4, label="Pred Data")
    plt.legend()
plot()
class LinearRegressionModel(nn.Module):
    def __init__(self):
        super().__init__()
        self.weights = nn.Parameter(torch.randn(1,dtype=torch.float), requires_grad=True)

        self.bias = nn.Parameter(torch.randn(1, dtype=torch.float), requires_grad=True)
    def forward(self , x:torch.Tensor) -> torch.Tensor:
        return self.weights * x + self.bias
model = LinearRegressionModel()
list(model.parameters())

with torch.inference_mode():
    y_pred = model(X_tset)

plot(prediction=y_pred)

loss_fn = nn.L1Loss()

optimzer = torch.optim.SGD(params=model.parameters(),lr=0.01)

epochs = 100

train_loss_values = []
test_loss_values = []
epcho_count = []

for epoch in range(epochs):
    model.train()
    y_pred = model(X_train)
    loss = loss_fn(y_pred , Y_train)

    optimzer.zero_grad()
    loss.backward()
    optimzer.step()

    model.eval()

    with torch.inference_mode:
        test_pred = model(X_tset)

        test_loss = loss_fn(test_pred, Y_test.type(torch.float))

    if epoch % 10 == 0:
        print(f"Epoch: {epoch} | MAE train loss {loss} | MAE test loss {test_loss}")

print(model.state_dict())

model.eval()

with torch.inference_mode():
    y_pred = model(X_tset)

plot(prediction=y_pred)
