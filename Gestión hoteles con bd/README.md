El objetivo de la siguiente práctica es migrar la primera versión de la aplicación de Gestión
de Hoteles, que manejaba los datos a través de un fichero `.csv`, a una aplicación que tenga
conexión con una base de datos MySQL.
Para ello, puede utilizarse un gestor de bases de datos web como phpMyAdmin.
La aplicación deberá tener un aspecto similar al del siguiente boceto:

![](https://github.com/ceciliacortess/DWS/assets/131865373/ed900a53-27ee-41a4-ba3b-f3d9e8fa7565)

Los datos originales de la base de datos, son los mismos que se trataron en la práctica de
csv.

![](https://github.com/ceciliacortess/DWS/assets/131865373/98c6bab3-c251-423d-b13f-a1e4f7fd4174)

Con ello, los pasos a seguir para la realización de la aplicación, podrían ser los siguientes:
1. Crear la base de datos en phpMyAdmin y la tabla hoteles correspondiente. Deberá
crearse un identificador para los hoteles que sea único.
2. Generar un script, para que el botón **restaurar la BD** de datos tenga la funcionalidad de
borrar la tabla y crearla de nuevo, mediante las instrucciones `DROP` y `UPDATE`. Podéis
tomar como ejemplo los scripts utilizados para manejar una base de datos de Pokemon
(https://github.com/DiscoDurodeRoer/Database_pokemon/blob/master/1%C2%BA_generacion/scripts/mysql_pokemon.sql).
3. **Añadir Hotel**. Deberá enlazar con un formulario que permita introducir los datos de un
nuevo hotel con un botón añadir, que realizará la acción de `INSERT` en la base de datos.
4. **Borrar Hotel**. Deberá enlazar con un formulario que pida introducir el identificador del
hotel a eliminar y ejecute el script `DELETE`.
5. **Modificar Hotel**. Dberá enlazar con un formulario que pida introducir el identificador del
hotel a modificar y a continuación muestre un formulario para introducir los nuevos datos del
hotel.
