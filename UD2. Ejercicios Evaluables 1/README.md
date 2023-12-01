# Ejercicio 1
Para no romper la costumbre, nuestro primer ejercicio será crear un archivo php que imprima mediante `echo` o `print` la frase **“Hello World”**.

# Ejercicio 2
Modificar el ejercicio anterior para que la primera palabra (*Hello*) esté contenida en una variable.

# Ejercicio 3
Crear una página html donde se mostrará un título con la etiqueta html `<h1>`. Ese título será el valor de una variable php.

# Ejercicio 4
Hacer un programa en php que muestre el texto contenido en las variables llamadas `nombre` y `edad`. Si `nombre` es `NULL`, mostrará **Hola desconocido**. Si se declara un nombre `X` y `edad` es `NULL`, mostrará **Hola X, No se tu edad**. Si se declara un nombre `X` y `edad` es `Y`, mostrará **Hola X, Tiene Y años**.

# Ejercicio 5
Hacer un programa en php que calcule el mayor de dos números almacenados en dos variables usando el condicional `if`.

# Ejercicio 6
Crear un archivo php que, dados dos números almacenados en dos variables, nos muestre por pantalla el mayor de ellos o la frase **“Los números son iguales”** si son iguales. Usar la estructura `switch` y el operador nave espacial.

# Ejercicio 7
Hacer un programa que, indicada una nómina en una variable, si es menor de 800€ le haga un incremento del 20%, si está entre 800 € y 1200 € la deje como está, y si es mayor le quite un 15%. Usar el condicional `if`.

# Ejercicio 8
Hacer un programa en php que defina una constante `LÍMITE` y genere un número aleatorio entre 1 y el límite y lo muestre por pantalla indicando si es par o impar. Usar el operador ternario `?` y la función `rand()`.

# Ejercicio 9
Crear una página que calcule el importe final de una factura. Debemos crear dos variables que contendrán el precio de un producto y las unidades adquiridas. Además, crear una constante llamada `IVA` del 21%. Debemos calcular y devolver el precio del producto, las unidades adquiridas, el importe base de la factura, el importe del IVA y el importe final de la factura.

# Ejercicio 10
Crear las variables `código`, `nombre`, `apellidos`, `puesto`, `sueldo`, `edad`, `num_hijos` y `sucursal` e inicializarlas con los siguientes valores:
<br>
<table>
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Puesto</th>
        <th>Sueldo</th>
        <th>Edad</th>
        <th>Nº de hijos</th>
        <th>Sucursal</th>
    </tr>
    <tr>
        <td>1</td>        
        <td>Tom</td>        
        <td>Smith</td>        
        <td>Vendedor</td> 
        <td>75000</td>        
        <td>26</td>        
        <td>0</td>        
        <td>New York</td>
    </tr>
</table>
<br>
Realizar los siguientes cálculos de retenciones:

- **Retención 1:** Si es Vendedor y el Sueldo mayor a 70000 aplicar una retención del 10% sobre el sueldo y en caso contrario el 20%
- **Retención 2:** Si tiene más de 50 años o más de 2 hijos aplicar una retención del 5% sobre el sueldo y en caso contrario el 10%
- **Retención 3:** Si el sueldo es mayor de 50000 y menor de 80000 aplicar una retención del 5% sobre el sueldo y en caso contrario el 12%
- **Retención 4:** Si tiene 1 o 2 hijos aplicar una retención del 10% sobre el sueldo y en caso contrario el 5%
- **Retención 5:** Si el sueldo es mayor de 80000 o no tiene hijos aplicar una retención del 15% sobre el sueldo y en caso contrario el 5%
