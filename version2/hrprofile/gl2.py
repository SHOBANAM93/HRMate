import urllib
from bs4 import BeautifulSoup 

fhand=urllib.urlopen('https://www.careerbliss.com/hitachi/reviews/?page=1').read()
soup=BeautifulSoup(fhand,"html.parser")

letters = soup.find_all("div", class_="company-reviews")

lobbying={}
prefix="http://www.careerbliss.com/"

for element in letters:
    lobbying[element.a["data-reviewid"]]= {}


for element in letters:
    lobbying[element.a["data-reviewid"]]["link"]=prefix + element.a["href"]


critics = soup.find_all("p",class_="comments foggy")

#for thing in critics:
#    comment = thing.get_text()
#    print comment.strip('"')
#    lobbying[thing.get_text()]["comment"] = comment.strip('"')
"""
for element in letters:
    print soup.find("p",class_="comments foggy").get_text()
    comment = soup.find("p",class_="comments foggy").get_text()
    lobbying[element.a["data-reviewid"]]["comm"] = comment
"""

for element , thing in zip(letters , critics):
    comment=thing.get_text()
    lobbying[element.a["data-reviewid"]]["comm"] = comment.strip('"')

for element in letters:
    name = element.a.get_text()
    lobbying[element.a["data-reviewid"]]["name"] = name

rankings = soup.find_all("span", class_="span1 header8 value")

li = ['person-you-work-for', 'people-you-work-with', 'work-setting', 'support-you-get', 'Rewards-you-receive', 'Growth-Opportunities', 'Company-culture', 'way-you-work']

for element in letters:
    for score,i in zip(rankings,li):
        lobbying[element.a["data-reviewid"]][i] = score.get_text()
    
    
    
for item in lobbying.keys():
    print lobbying[item]["name"]+"( Review-ID:  "+item+ " ) :" + "\n\t" +"link: " + lobbying[item]["link"] + "\n\t" + "comment: " + lobbying[item]["comm"]
    print "\nRatings: \n1.person-you-work-for: "+lobbying[item]["person-you-work-for"]+"\n2.people-you-work-with"+lobbying[item]["people-you-work-with"]+"\n3.work-setting"+lobbying[item]["work-setting"]+"\n4.support-you-get"+lobbying[item]["support-you-get"]+"\n5.Rewards-you-receive"+lobbying[item]["Rewards-you-receive"]+"\n6.Growth-Opportunities"+lobbying[item]["Growth-Opportunities"]+"\n7.Company-culture"+lobbying[item]["Company-culture"]+"\n8.way-you-work"+lobbying[item]["way-you-work"]+"\n\n"
    https://github.com/SHOBANAM93/HRMate.git

import csv


with open("lobbying2.csv", "w") as toWrite:
    writer = csv.writer(toWrite, delimiter=",")
    writer.writerow(["name", "link","comm","person-you-work-for","people-you-work-with","work-setting","support-you-get","Rewards-you-receive","Growth-Opportunities","Company-culture","way-you-work" ])
    for item in lobbying.keys():
        writer.writerow([lobbying[item]["name"], lobbying[item]["link"], lobbying[item]["comm"],lobbying[item]["person-you-work-for"],lobbying[item]["people-you-work-with"],lobbying[item]["work-setting"],lobbying[item]["support-you-get"],lobbying[item]["Rewards-you-receive"],lobbying[item]["Growth-Opportunities"],lobbying[item]["Company-culture"],lobbying[item]["way-you-work"]])
        
import json

with open("lobbying2.json", "w") as writeJSON:
    json.dump(lobbying, writeJSON)
