import mysql as my
from mysql import connector

try:
    mydb = my.connector.connect(host="den1.mysql2.gear.host", user = 'pharmacy1', password = 'Lg56~yj?Wj7K' , database="pharmacy1")
    cursor = mydb.cursor()
except:
    print('Connection Failed!')

# ------------------- For insertion -----------------------------

# sql = 'INSERT into'

# cursor.execute(sql)

# mydb.commit()

# ------------------------------- For retrival ----------------------------------

sql = 'SELECT * from CASHIER'



cursor.execute(sql)

res = cursor.fetchall()


for i in res:

    print(i)
