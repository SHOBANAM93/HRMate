import json

#put the affin keywords text file here and opening it

afinn = dict(map(lambda (k,v): (k,int(v)),[ line.split('\t') for line in open("AFINN-111.txt") ])) #converting the keywords and score to a dict
#a = afinn["Good".lower()]
#print a
#tweet = open("new_tweet2.txt","r")




    
#this function is for checking whether the text is positive or negative or neutral for the uploaded text file
def generate(name):
        pcnt = 0
        ncnt = 0
        neu = 0
        with open(name) as json_file:
            lobbying = json.load(json_file)
            
            
#       for line in open(name, "r"):
            for item in lobbying.keys():
                line=lobbying[item]["comm"]
                
                s=sum(map(lambda word: afinn.get(word, 0), line.lower().split()))
                if (s < 0):
                    print "negative"
                    ncnt += 1
                    if "neg" in lobbying:
                        lobbying[item]["neg"]=lobbying[item]["neg"]+1
                    else:
                        lobbying[item]["neg"]=1
                    
                elif(s > 0):
                    print "Positive"
                    pcnt +=1
                    if "pos" in lobbying:
                        lobbying[item]["pos"]=lobbying[item]["pos"]+1
                    else:
                        lobbying[item]["pos"]=1
                else:
                    print "neutral"
                    neu +=1
                    if "neu" in lobbying:
                        lobbying[item]["neu"]=lobbying[item]["neu"]+1
                    else:
                        lobbying[item]["neu"]=1
        with open("lobby.json", "w") as writeJSON:
            json.dump(lobbying, writeJSON)
        return pcnt
        
pcnt1 = generate('lobbying.json')
pcnt1 = generate('lobbying2.json')
