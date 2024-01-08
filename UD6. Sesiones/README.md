## 1. EJERCICIO: VISUALIZAR Y BLOQUEAR LAS COOKIES
#### Buscar información en internet de como visualizar y bloquear las cookies en el navegador que utilices.

Los siguientes pasos son para el navegador Chrome:

1. En el ordenador, abre Chrome.
2. Arriba a la derecha, haz clic en `Más` y luego `Configuración`.
3. En `Privacidad y seguridad`, haz clic en `Configuración de sitios`.
4. Haz clic en `Cookies de terceros`.
5. Selecciona una de las siguientes opciones:
  - Permitir cookies de terceros.
  - Bloquear cookies de terceros en modo Incógnito.
  - Bloquear cookies de terceros.
  - Si bloqueas las cookies de terceros, se bloquearán todas las cookies de terceros de otros sitios, a no ser que el sitio esté permitido en tu lista de excepciones.

## 2. EJERCICIO. CONFIGURAR NAVEGADOR
#### Busca información en internet de cómo cerrar la sesión de Gmail automáticamente al salir del navegador.<br><br> Gmail es sin duda el servicio de correo electrónico más utilizado en gran parte del mundo. Tanto es así que son muchos millones de personas los que nada más sentarse frente al ordenador, lo primero que hacen es abrir un navegador e iniciar sesión en su cuenta de correo electrónico de Gmail. Sin embargo, son muy pocos los que después de hacer uso del navegador, entran de nuevo en Gmail y cierran la sesión. Por lo tanto, si alguien después utiliza el mismo PC, podrán entrar en su cuenta de Gmail sin problema y acceder a sus mensajes de correo.

En Google Chrome puedes utilizar una extensión para cerrar la sesión automáticamente al salir del navegador:

1. Abre Google Chrome y ve a la tienda de extensiones.
2. Busca `Auto Logout` en la barra de búsqueda.
3. Encuentra la extensión `Auto Logout` en los resultados y haz clic en `Agregar a Chrome` para instalarla.
4. Una vez instalada, haz clic en el ícono de la extensión en la esquina superior derecha de tu navegador.
5. Configura la extensión según tus preferencias, incluido el tiempo de inactividad antes de cerrar la sesión.

## 3. EJERCICIO. CONTADOR
Hacer una página web y hacer que mediante cookies nos cuente cuantas veces entramos en el
navegador. Hacer que las cookies caduquen en un año. Utilizar la función `setcookie()` y la variable
`$_COOKIE`.

## 4. EJERCICIO. IMPRIMIR NOMBRE

Crear una cookie que almacene el nombre del visitante en el sitio y cada vez que
entremos al sitio nos de la bienvenida imprimiendo el nombre. Para introducir el nombre,
crear un formulario con un control de tipo text.

## 5. EJERCICIO. BORRAR COOKIE

Para borrar una cookie se debe llamar a la funcion `setcookie` con una fecha anterior
a la actual. Crear una web que nos permita introducir utilizando un control de tipo email una
dirección de correo electrónico y mediante un checkbox indicaremos que queremos que recuerde la
dirección o que no la recuerde. Al pulsar `Enviar` accederemos a otra página que nos mostrará la
dirección de correo si se marcó la opción recordar.

## 6. EJERCICIO. COOKIE CON TIME 0

Para crear una cookie que sólo tenga existencia mientras no cerremos la ventana
del navegador, pasaremos como fecha de expiración de la cookie, el valor cero. Una vez que la
instancia del navegador se cierra, dicha cookie desaparecerá.
Este tipo de cookie puede ser muy útil para validar un usuario en un conjunto de páginas, si
previamente introdujo correctamente su nombre de usuario y clave. Es decir, una vez validado
el usuario, se verifica en páginas sucesivas si existe la cookie. Una vez que el usuario cierra el
navegador, no hay posibilidad de solicitar las páginas recorridas sin previa validación
nuevamente de clave y usuario.
Crear una página principal en la que se introduzca el usuario y contraseña. Si son válidos
accederemos a una página con un menú Empresa, Servicios y Contacto que me permite
navegar por sus páginas hasta que cierre el navegador.

## 7. EJERCICIO. CAMBIO DEL COLOR DE FONDO CON UNA COOKIE
Crear una Cookie que almacene el color seleccionado de un desplegable. Al pulsar
en el botón Enviar lo aplique al fondo de la página. Además, la página dispondrá de un enlace a
otra página en la que mostrará el color de fondo seleccionado y un enlace de volver a la página
inicial. Por último, la página inicial dispone de un botón que permite eliminar la cookie y por
tanto el color de fondo.

![](https://github.com/ceciliacortess/DWS/assets/131865373/a4a6fe42-ee82-48ce-a27b-7fb7951e97da)


## 8. EJERCICIO. AVISO DE COOKIES
Desde que se aprobó el apreciado `artículo 22 de la Ley 34/2002, la ley de Cookies`, en Europa
estamos obligados a notificar al usuario si creamos Cookies en sus navegadores. Un sistema simple
de almacenamiento que lleva entre nosotros desde hace décadas apareció en 1995 en Internet
Explorer, donde se puede guardar cierta información en sus propios equipos con objetivos tan
diversos como mejorar la experiencia de navegación o espiar su forma de moverse por la red.
Por ello ahora se nos pide crear un pequeño cartel que informe con los siguientes datos:
- Texto descriptivo.
- Botón para aceptar la ley.
- Enlace con más información sobre la ley.
  
Con PHP podemos mostrar un cartel si no ha aceptado y ocultarlo para siempre si pulsa el botón
donde nos da el consentimiento.
Cada vez que el usuario entre a la web, si previamente no ha aceptado las cookies se le mostrará
el mensaje anterior, sin embargo, si en algún momento el usuario ha aceptado las cookies, no se le
debe de mostrar de nuevo.

![](https://github.com/ceciliacortess/DWS/assets/131865373/643eaab1-ea3f-4402-a0aa-1ae2d1d3bf48)

## 9. EJERCICIO. SESIONES
Las variables de Sesión es otro método para hacer que variables estén disponibles
en múltiples páginas sin tener que pasarlas como parámetro. A diferencia de las cookies, las
variables de sesión se almacenan en el servidor y tienen un tiempo limitado de existencia.
Para identificar al usuario que generó las variables de sesión, el servidor genera una clave
única que es enviada al navegador y almacenada en una cookie. Luego, cada vez que el
navegador solicita otra página al mismo sitio, envía esta clave única, con la cual el servidor
identifica de qué navegador proviene la petición y puede rescatar de un archivo de texto las
variables de sesión que se han creado.
Cuando han pasado un tiempo sin peticiones por parte de un cliente (navegador) las variables
de sesión son eliminadas automáticamente. Una variable de sesión es más segura que una
cookie ya que se almacena en el servidor.
Crear una página con un formulario que nos pida el nombre de usuario y clave. En una segunda
página crearemos las dos variables de sesión y en una tercera página recuperaremos los
valores almacenados en las variables de sesión.

## 10. EJERCICIO. SESIÓN PARA ALMACENAR LA HORA
Crear una variable de sesión que almacene la hora de entrada en una página. Al
pulsar `SALIR`, que almacene la hora actual e indique el tiempo que ha estado accediendo a esa página.

![](https://github.com/ceciliacortess/DWS/assets/131865373/37dd193d-c27f-43cc-aa5b-d6189c9831e1)

## 11. EJERCICIO. LOGIN Y SESIONES
Hacer un formulario de control de acceso para logearse y llamarlo `ejercicio11a.html`. Al pulsar al
botón enviar se debe abrir una nueva página `ejercicio11b.php` que muestra la información del
usuario, sólo en el caso de que el usuario sea admin, en caso contrario mostrar un mensaje
indicando que no se tiene acceso al panel de administración.
Utiliza una sesión en lugar de una cookie para realizar este login. ¿Qué ocurre si cierro el
navegador y vuelvo a entrar? ¿Volverá a solicitarnos el acceso?

![](https://github.com/ceciliacortess/DWS/assets/131865373/a4429d3c-242d-4545-a968-11fca9b46a70)
