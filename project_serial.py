import serial
import MySQLdb
ser = serial.Serial()
ser.baudrate = 9600
ser.port = 0

a = 0
b = 0
c = 0
d = 0
e = 0
f = 0
g = 0
h = 0

    
while True:
    ser.open()
    db = MySQLdb.connect("localhost","root","","raspberrypi")
    cursor = db.cursor()
    cursor.execute("select switch from switch1 order by no desc limit 1")
    data1 = cursor.fetchone()
    print data1
    cursor.execute("select switch from switch2 order by no desc limit 1")
    data2 = cursor.fetchone()
    print data2
    cursor.execute("select switch from switch3 order by no desc limit 1")
    data3 = cursor.fetchone()
    cursor.execute("select switch from switch4 order by no desc limit 1")
    data4 = cursor.fetchone()
    if data1 == ('a',):
        if a == 0:
             ser.write('a')
             a = 1
             e = 0
    elif data1 == ('e',):
        if e == 0:
            ser.write('e')
            e = 1
            a = 0


    if data2 == ('b',):
        if b == 0:
             ser.write('b')
             b = 1
             f = 0
    elif data2 == ('f',):
        if f == 0:
            ser.write('f')
            f = 1
            b = 0

    if data3 == ('c',):
        if c == 0:
             ser.write('c')
             c = 1
    elif data3 == ('g',):
        if g == 0:
            ser.write('g')
            f = 1

    if data4 == ('d',):
        if d == 0:
             ser.write('d')
             d = 1
    elif data4 == ('h',):
        if h == 0:
            ser.write('h')
            h = 1
    ser.close()
                    
        
       
        
   


    
    
db.close()


