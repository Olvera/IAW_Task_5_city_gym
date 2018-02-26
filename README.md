# 2nd ASIR - IAW Task #5
###Implementation of PHP in a subscrition web where to input customer name and select some options in diferents input forms.

###Introduction.

  The selected exercise is a gym subscription, where the costumer choose his level, extra services and specific trainning classes.
  I used basic **_HTML_** code, **_CSS_** for web presentation, a few lines of **_JavaScript_** (for responsive dessign) and, to process and colect input data, **_PHP_**.
  
  The choosen inputs are:
  
        * Text (name and surname)
        * Radio (customer level)
        * Checkbox (extra service/s - one or more)
        * Multiple select (trainning class/es - one or more)
    
  Each opcion have an associated cost, reflected in the page content (**_city_gym.html_**). Once the choice is done, clicking a buton, it sends to another page (**_city_gym.php**) where it's shown a summary reflecting all the choices, its correspondent cost and the total amount (per month) of all the selections.

###About the code implementation.

  * Las primeras lineas de este **_JS_** definen las variables globales y gestionan el acceso y carga del texto del archivo 
      **_XML_** (**_onload=function()_**) en cada etiqueta correspondiente (**_gestionarXml()_**), así como inicializar la 
      corrección al '_clickar_' sobre el botón de corrección del test (**_onclick=function()_**).

    Si bien se plantea el desarrollo de la aplicación con el uso de _onsubmit_, he optado por _onclick_ porque, entre otras 
    razones, me permite un mejor manejo de la página de examen, tal como la he desarrollado, y evita lo que me parece un problema: 
    con _onsubmit_, si el cursor se encuentra activo dentro del cuadro de texto _input_, preguntas 1 y 6, y pulsamos, 
    accidentalmente o por error, la tecla _enter_, el efecto es devastador, ya que recarga la página, reinicia el cronómetro y 
    resetea todas respuestas ya seleccionadas.

    * **_corrExam()_** : Agrupa a las funciones que corrigen cada una de las pregunta y es ejecutado al pulsar _Comprobar..._ o
      una vez se agota el tiempo.
      
    * **_inicializar()_** : Pone el contador de notas a cero y borra la corrección existente.

    * **_darRespuestaHtml(r)_** : Crea un parrafo _'p'_ con el contenido de _'r'_. Usado para presentar las lineas de la 
      corrección de cada respuesta, correspondiente a cada pregunta, y la nota parcial o total (**_presentarNota()_**).
    
    * **_cargaCrono()_** : Gestión del tiempo (**_setInterval()_**) y su acción al finalizar este. LLegado al límite de
      tiempo, comprueba que los contadores estén en cero y si se ha accionado o no _Comprobar..._. En caso de que no haya sido
      pulsado (**_no se ha efectuado ninguna corrección previa_**), realiza la corrección (**_corrExam()_**) y detiene la 
      aplicación. Si ya se ha efectuado al menos una corrección, se limita a detener la aplicación (**_stop()_**).
      
    * **_stop()_** : Presenta la ventana de alerta de tiempo agotado y permite acceder (_aceptar_) a la corrección. Para ello
      guarda los datos del _DIV_ donde esta se muestra, borra todo el contenido de _MAIN_, elimina el cronómetro -ya no es
      necesario-, y recupera, dentro de _MAIN_, los datos de la corrección.

  * **_d.css/m.css_** : El primero controla el estilo de presentación en dispositivos mas grandes (a partir de 961 px), mientras 
      el segundo lo hace en dispositivos de menor escala o tamaño (menos 961 px).
      
###Diseño.

  Para el diseño final, he optado por confeccionar un conjunto de tres páginas HTML:  **_home_**, **_how_to_** y **_exam_1_**. 
Diseño de contenedores (principal **_'MAIN'_** e interiores **_'DIV'_**) de colores y contrastes suaves, simple, aplicando 
adorno en contenedores DIV en forma de esquinas redondeadas y ligero sombreado de bordes a cada elemento contenedor. 
Sin estridencias cromáticas, pero atractivo.

  * **_Cabecera y footer_** (todas las páginas)
    * Presenta cabecera con logo (de creación propia, mediante software gratuito online de **_[logotipogratis.com](http://logotipogratis.com/)_**) 
      nombre, lema y dirección (todo imaginario) de la universidad.
    * Dentro del mismo contenedor, aparece un menú horizontal con los enlaces a cada una de las páginas de la aplicación.
    * En el footer (pié de página) datos de autoria de la aplicación y contacto.

  * Contenedor **_main_**. Capa principal en la que se incluirán contenedores **_div_**.

  * **_home.html_**    
      * **_div_** 1 - ¿Por qué... Información sobre las ventajas y cualidades del centro educativo. Decorado con fotografía de 
      campus universitario (**_[fuente imagen](http://micuadernodeinformaticanathy.blogspot.com.es)_**).
      * **_div_** 2 - ¿Como... Información sobre apoyo a la hora de elgir recorrido curricular.  Decorado con fotografía de 
      aula de informática (**_[fuente imagen](http://micuadernodeinformaticanathy.blogspot.com.es)_**).
      * **_div_** 3 - Brebe introducción a la prueba disponible.
  
  * **_how_to.html_**
     * **_div_** 1 - Introducción a la prueba. Misma imagen que anterior (_home.html_).
     * **_div_** 2 - Mecánica de funcinamiento y detalle de la prueba. Misma imagen que anterior (_home.html_).
     * **_div_** 3 - Incentivo final para realizar el esamen. Botón para acceder a la página del examen (_exam_1.html_).
     
  * **_exam_1.html_**
    * Se despliegan las diez peguntas que componen el test,cada una en '_div_' independiente y en el orden siguiente:
      * Texto
      * Selección única
      * Selección múltiple (se indica necesidad de mantener pulsado '_CONTROL_' para seleccionar varias opciones)
      * Selección múltiple checkbox
      * Selección múltiple radio
      
      Este bloque se repite, completando las preguntas requeridas.
      
   * Botón **_Comprobar resultados_** (pié de contenedor 'MAIN'). Al pulsarlo, antes de concluir el tiempo establecido,
   aparece, abajo e independiente de 'MAIN', un nuevo 'DIV' en el que se muestra, por orden (del nº 1 al nº 10), si la respuesta 
   seleccionada es o no correcta. Permitimos, así, rectificar las respuestas erroneas. 
   Una vez finalizado el tiempo, una ventana tipo 'ALERT' nos comunica este hecho y que al 'ACEPTAR' dicho mensaje, podremos ver la calificación final.
   Al hacerlo, se vacía todo el contenido de 'MAIN' y desaparece el cronómetro.

El contenido ahora es un solo 'DIV' en el que vemos la calificación final, dando por concluido el examen.
     Aparece el boton **_¿Nuevo intento?_** , que invita a realizar de nuevo el examen directamente.
