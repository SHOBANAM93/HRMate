import re
name=raw_input('Enter the file Name... ')

try:
    handle=open(name,'r')
except:
    print "Invalid file name..."
    exit()


wordsum=None
for line in handle:
    words=re.findall('[0-9]+',line)
    for word in words:
        if wordsum is None:
            wordsum=int(word)
        else:
            wordsum=wordsum+int(word)

print wordsum