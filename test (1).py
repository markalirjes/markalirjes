import email
from bs4 import BeautifulSoup
import mysql.connector
files = ["test.eml"]

for file in files:
    f = open(file, "r")
    email_string = f.read()
    email_string = my_str.replace(",", "")
    email_string = my_str.replace("!", "")
    email_string = my_str.replace("@", "")
    email_string = my_str.replace("$", "")
    email_string = my_str.replace(".", "")
    email_string = my_str.replace("%", "")
    email_string = my_str.replace("^", "")
    email_string = my_str.replace("&", "")
    email_string = my_str.replace("*", "")
    email_string = my_str.replace("(", "")
    email_string = my_str.replace(")", "")
    email_string = my_str.replace("<", "")
    email_string = my_str.replace(">", "")
    email_string = my_str.replace(",", "")
    email_string = my_str.replace(";", "")
    email_string = my_str.replace(":", "")
    email_string = my_str.replace("`", "")
    email_string = my_str.replace("~", "")
    email_string = my_str.replace("'", "")
    email_string = my_str.replace('"', "")
    email_string = my_str.replace("{", "")
    email_string = my_str.replace("}", "")
    email_string = my_str.replace("|", "")
    email_string = my_str.replace("/", "")
    email_string = my_str.replace("And", "")
    email_string = my_str.replace("and", "")
    email_string = my_str.replace("Or", "")
    email_string = my_str.replace("or", "")

soup = BeautifulSoup(email_string, 'html.parser')
text = soup.div.string
message = text.split()

msg = email.message_from_string(email_string)

sender_email = msg['From']
s = sender_email
start = s.find ("<") # returns 10
end = s.find (">") # returns 17
sender = s [start + 1: end] # returns "sample"
giver_email = msg['To']
s = giver_email
start = s.find ("<") # returns 10
end = s.find (">") # returns 17
giver = s [start + 1: end] # returns "sample"



db = mysql.connector.connect(
            host="localhost",
            user="root",
            password="",
            database="copilet"
            )
cd = "hello"
cursor = db.cursor()
query ="INSERT INTO emails (sender_email, giver_email,msg,count) VALUES ('"+ sender  +"','"+  giver +"','"+ text +"','"+ cd +"')"
cursor.execute(query)


sql = """SELECT * FROM `teachers` WHERE email = '%s' """ % (giver)


cursor.execute(sql)

myresult = cursor.fetchone()

unity = myresult[2].split()

count = 0

# برای هر عضو لیست اول، بررسی می‌کنیم که چند بار در لیست دوم تکرار شده است و به متغیر count اضافه می‌کنیم
for item in unity:
    count += message.count(item)
count = str(count)
# اجرای دستور UPDATE
xxx = "UPDATE emails SET count = '"+ count +"' WHERE msg = '"+ text +"'"
cursor.execute(xxx)

# تأیید تغییرات
db.commit()





