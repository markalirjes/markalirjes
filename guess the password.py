#genes

geneset = " abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!."
target = "Hello World!"

#generate a guess

import random
 
def generate_parent(length):
    genes =[]
    while len(genes) < length:
        sampleSize = min(length - len(genes), len(geneset, sampleSize))
        genes.extend(random.sample(geneset, sampleSize))
    return ''.join(genes)

#fitness

def get_fitness(guess):
    return sum(1 for expected, actual in zip(target, guess)
               if expected == actual)


#Mutate

def Mutate(parent):
    index = random.randrange(0, len(parent))
    childgenes = list(parent)
    newGene, alternate = random.sample(geneset , 2)
    childgenes[index] = alternate \
        if newGene == childgenes[index] \
            else newGene
    return ''.join(childgenes)

#Display

import datetime

def Display(guess):
    timeD = datetime.datetime.now() - startTime
    fitness = get_fitness(guess)
    print("{0}\t{1}\t{2}".format(guess, fitness, str(timeD)))

#main


random.seed()
startTime = datetime.datetime.now()
bestParent = generate_parent(len(target))
bestFitness = get_fitness(bestParent)
Display(bestParent)


#main loop for genetic engine

while True:
    child = Mutate(bestParent)
    childFitness = get_fitness(child)
    if bestFitness >= childFitness:
        continue
    Display(child)
    if childFitness >= len(bestParent):
        break
    bestFitness = childFitness
    bestParent = child