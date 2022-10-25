import time
from selenium import webdriver
from selenium.webdriver.common.by import By
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="123456",
  database="pythonDB"
)

mycursor = mydb.cursor()

#cria o DB
def criarDB(nome):
    mycursor.execute("CREATE DATABASE {nome}")


def criarTabela():
    mycursor.execute("CREATE TABLE produtos (id INT AUTO_INCREMENT PRIMARY KEY,titulo VARCHAR(255), preco VARCHAR(255), quantidadeAvaliacao VARCHAR(255))")


##criarTabela()


driver = webdriver.Chrome()
driver.get('https://www.kabum.com.br/')

busca = 'fone de ouvido bluethooth'

driver.find_element(By.ID, "input-busca").send_keys(busca)
driver.find_element(By.XPATH, '//*[@id="barraBuscaKabum"]/div/form/button').click()
time.sleep(10)

elementosTitulo = driver.find_elements(By.CLASS_NAME, "nameCard")
titulos = []
for i in range(10):
    titulos.append(elementosTitulo[i].text)

elementosPrecos = driver.find_elements(By.CLASS_NAME, "priceCard")
precos = []
for i in range(10):
    precos.append(elementosPrecos[i].text)

elementosAvaliacao = driver.find_elements(By.CLASS_NAME, "ratingCard")
avaliacao = []
for i in range(10):
    avaliacao.append(elementosAvaliacao[i].text)



for i in range(10):
    sql = "INSERT INTO produtos (titulo, preco, quantidadeAvaliacao) VALUES (%s, %s, %s)"
    val = (titulos[i], precos[i], avaliacao[i])
    mycursor.execute(sql, val)
    mydb.commit()
    print(mycursor.rowcount, "record inserted.")