inName = input("Enter the input File Name: ")

# inputFile = open(inName, 'r')
inputFile = inName

uniqueWords=[]

for line in inputFile:
    words = line.split()

    for word in words:
        if not word in uniqueWords:
            uniqueWords.append(word)

            for word in uniqueWords:
                print(word)



#Take the input file name
filename = input('Enter the input file name: ')

#Open the input file
# inputFile = open(filename,"r+")
inputFile = filename

#Define the dictionary.
list = {}

#Read and split the file using for loop
for word in inputFile.split():
    if word not in list:
        list[word] = 1
    else:
        list[word] += 1

print(list)