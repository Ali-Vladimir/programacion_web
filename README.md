# programacion_web
Notas sobre clase

20 de Agosto de 2024

Primer estandar
HTTP (Hypertext Tranfer Protocol)
El protocolo de tranferencia de hipertexto es un protoclo de comunicaciones

HTTP/1.1
Es un protocolo para distribuir, colaborar y hacer que la informacion se convierta en hipermedia 
Es un protocolo "peticion/respuesta"
Un codigo 200 siginifica "OK" osea que el recurso esta disponible
Un codigo 404 siginifica "Not Found" no encontrado
Un codigo 500 significa INternal Server error

HTML
Es un lenguaje qie es usando para describir el contenido de documentos web, Dentro de su sintaxis usa marcas de ellas, son incrustadas en el contenido del docuemnto para descirle a los agentes como el navegador como deben de ser interpretadas esa porcion del documento.
Sirve para codificar y vizualizar documentos

URL
Es la forma compacta de loclizacion de un recuros disponible en internet
todo recurso que se publique en internte tiene una URL

HTTPS funciona en el puerto 443
FTP funciona en el puerto 21

"https://www.youtube.com/watch?v=MJkdaVFHrtO" 

EN un URl existe el path que es el watch y el searchpath qie es lo qe viene desñues de el signo de interrogacion ?

"https://sii.itcelaya.edu.mx/sii/index.php?r=cruge/ui/login"

En otros casos no aparece a simple vista el path pero lo que se usa en ese caso es el indice para despues usar nuevamente el searchpath en este caso la "r"

Notas 22 de Agosto del 2024

Proyecto de programacion web: entrega finales de septiembre

¿Que se va hacer? Propuesta 

1. Nombre del proyecto
2. Introduccion
3. Problematica a resolver (justificacion)
4. Investigacion del estado del arte
4. 1. Servidores
4. 2. Lenguaje de programacion
4. 3. Tecnologias
4. 4. Frameworks
4. 5. Motor de base de datos y porque
5. Anallisis
5. 1. Diagrama de casos de uso
5. 2. Diagrama de ER y Relacional (Base de Datos)
6. Desarrollo(Un texto breve para cerrar los puntos anteriores)
7. Agregar referencias 

HTML define el comtemido y la estructura del contenido web. A menudo se complementa con tecnologias como hojas de estilo en cascada (CSS) y le gujaes de programacion como JavScript.


Etiquetas en HTML

Pagina para consular las etiquetas

"https://www.w3.org/TR/2012/WD-html-markup-20121025/elements.html"

Tarea 25 de Agosto

El color hexacto que tendra la pagina es el rojo #da291c y el amarrillo #f3dc0c

 La ubicacion exacta sera en las siguientes coordenadas 19.345914219800022, -99.1793151055819


Notas 27 de Agosto del 2024

CSS Cascading Style Sheets: El html solo define el cuerpo lo describe y dice en que orden va a ser creado pero el css le da todo el estilo

Existen varias maneras de feinir el estilo de la pagina unsando css una de ellas es agregando como etiqueta, otra de las maneras en las que se puede agregar un estilo es desde el principio haciendo una creacion de estilos de manera controlada, tambien existe una tercera forma la cual es la siguiente y la cual es crear un archivo .css donde tengas toda la estreutura de la presentacion y despues ligar el documento con nuestro docuento html, al hacerlo de esta ultima manera es mas practico debido a que en citios web grandes es dificil estatr modificando o agregando los estilos en cada docuemnto html, si tu tienes mas de una hoja de estilo a l cual le estas haciendo referencia en un solo documento html como funciona con el modelo de cascada es te se quedara y se hira modificando con forme a los estilo que vaya teniendo en forma de caja. 

Empezando a usar boostrap, nos podemos dar cuenta que cada una de las referencias hacia los elemtnos de boostrap es una peticion en la red ademas de que a pesar de que agregamos un boostrap para modificar el index del la carpeta burger aun asi despues se puede hacer una modificacion adicional esto gracias a el cascadeo.

Notas 29 de Agosto

En este caso al usar boostrap podemos hacer uso de sus clases para hacer que nuestra pagina pueda ser responsiva en el caso de contenedores es usando la clase conteiner fluid o en el caso de las imagenes podemos poner image fluis como clase

Notas 05 de Septiembre

Que es un vps
Un VPS, o Servidor Privado Virtual (por sus siglas en inglés, Virtual Private Server), es un tipo de alojamiento web que utiliza la virtualización para dividir un servidor físico en varios servidores virtuales

Que es un colocation en un centro de datos


Notas 10 de Septiembre

Intalacion de XAMPP

LO primero que hicimos fue mover nuestro proyecto a la caroeta de htdocs para poder hacer que nuestra computadora funciones ocmo servidor web despues hicimos que todos los docuetnos que tuvuerin terminacion en html lo cambiaramos por php para poder empezar a trabahjar con el lenguaje 

PHP es invisible al usuario solo se muestra el codigo en html miestras que php permanece oculto ademas php puede concetctars a practicamente cualwuier tipo de motor de base de datos