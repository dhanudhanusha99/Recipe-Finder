def fun(ingre):
	import mysql.connector
	mydb = mysql.connector.connect(
	  host="localhost",
	  user="root",
	  password="",
	  database="recipe_finder"
	)
	
	ingre=ingre.split("#")[0:-1]
	print(ingre)

	mycursor = mydb.cursor()
	
	

	sql = ""
	#val = ("0", "1")
	val = (status, id)

	mycursor.execute(sql, val)

	mydb.commit()

#status="0"
#id="1"	
#fun(status,id)

ingre="carrot#mango#"
fun(ingre)