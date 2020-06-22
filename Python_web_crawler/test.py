import mysql.connector
from docutils.parsers.rst.directives import flag
mydb = mysql.connector.connect(
  host="10.55.144.3",
  user="root",
  passwd="js880211",
  database="AnimeTable"
)
mycursor = mydb.cursor()
def create():
    mycursor.execute("SHOW tables")
    flag=0
    for j in mycursor.fetchall():
        if(j[0]=="Anime"):
            flag=1
        if(flag==0):
            continue
    if(flag==0):
        sql = "CREATE TABLE Anime (name VARCHAR(255),year VARCHAR(255), month VARCHAR(255))"
        mycursor.execute(sql)
    
def exe(name,year,month):
    sql = "INSERT INTO Anime (name,year,month) VALUES (%s,%s,%s)"
    mycursor.execute(sql,(name,year,month))
    mydb.commit()
def printdata():
    sql = "select * from Anime"
    mycursor.execute(sql)
    myresult = mycursor.fetchall()
    for i in myresult:
        print(i)

mycursor.execute("DROP TABLE Anime")
create()
#exe("HI",1000,"ijij")
#printdata()