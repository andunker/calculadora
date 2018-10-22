1) Crear la imagen docker
docker build -t calculadora .

2) Correr el contenedor
docker run -p 8181:8181 calculadora 

3)
Sumar
http://localhost:8181/api/sumar?a=2&b=4

Retsar
http://localhost:8181/api/restar?a=2&b=4

Multiplicar
http://localhost:8181/api/multiplicar?a=2&b=4

Dividir
http://localhost:8181/api/dividir?a=2&b=4