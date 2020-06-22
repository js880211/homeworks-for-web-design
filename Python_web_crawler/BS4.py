import requests ,time
import test
from bs4 import BeautifulSoup
r = requests.get('https://zh.wikipedia.org/wiki/%E6%97%A5%E6%9C%AC%E5%8B%95%E7%95%AB%E5%88%97%E8%A1%A8_(2010%E5%B9%B4%E4%BB%A3)')

def find(node,year):
    month=node.parent
    table=month.next_sibling.next_sibling
    anilist=table.find_all("td")
    for i in range(len(anilist)):
        if(i%5==1):
            try:
                if("Template" not in str(anilist[i].a.string)):
                    print(str(anilist[i].a.string))
                    test.exe(str(anilist[i].a.string), str(year), str(node.string))
                    print("---------------------------")
            except AttributeError:
                a=anilist[i].string.replace("\n","")
                if(a!=""):
                    print(a)
                    test.exe(str(a), str(year), str(node.string))
                print("---------------------------")

if (r.status_code == 200):
    soup = BeautifulSoup(r.text, 'html.parser')
    year=soup.find_all(class_="mw-headline")
    for i in year:
        
        if(i.string[-1]=="年"):
            print(i.string)
            y=i.string
        if(i.string=="1月－3月"):
            find(i,y)
        elif(i.string=="4月－6月"):
            find(i,y)
        elif(i.string=="7月－9月"):
            find(i,y)
        elif(i.string=="10月－12月"):
            find(i,y)
else:
    print("ERROR")