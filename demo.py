import pypyodbc as od
import pandas as pd




Conn = od.connect(
    'DRIVER={SQL Server};'
    'SERVER=DESKTOP-IR0TTGB\SQLEXPRESS;'
    'DATABASE=marzieh;'
    'Trust_Connection=yes;')

df = pd.read_sql_query('SELECT * FROM products', Conn)

print(df)