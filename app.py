from flask import Flask, jsonify, render_template
from flask_cors import CORS
import mysql.connector

app = Flask(__name__)
CORS(app)

# #para la conexion a MySQL
# db_config = {
#     'host': 'localhost',
#     'user': 'root',
#     'password': '',
#     'database': 'fitness_app'
# }

# #creo la base de datos y tabla
# def setup_database():
#     conn = mysql.connector.connect(
#         host='localhost',
#         user='root',
#         password=''
#     )
#     cursor = conn.cursor()
    
#     # creo mi base de datos
#     cursor.execute("CREATE DATABASE IF NOT EXISTS fitness_app")
#     cursor.execute("USE fitness_app")
    
#     # aqui creo mi tabla de ejercicos segun sea 
#     cursor.execute("""
#     CREATE TABLE IF NOT EXISTS espalda_ejer (
#         id INT AUTO_INCREMENT PRIMARY KEY,
#         nombre VARCHAR(100),
#         imagen_url VARCHAR(255)
#     )
# """)

#     conn.commit()
#     conn.close()

#ejemplo de como definir las rutas o vistas a usar
@app.route('/inicio')
def inicio():
    return render_template('inicio.html')
        
@app.route('/vista2')
def vista2():
    return render_template('vista2.html')


if __name__ == '__main__':
    #setup_database()
    app.run(debug=True, host='0.0.0.0', port=5000)