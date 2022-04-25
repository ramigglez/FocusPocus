<?php

/**doctype
 * El doctype es la etiqueta html 
 * que se coloca en primer lugar
 * en cualquier proyecto html
 */
function dt() {
    return (new Bplate('!DOCTYPE',1,['html']))->get();
}

/**html
 * Esta etiqueta es el 
 * contenedor de toda la
 * pagina web
 */
function html($content) {
    return (new Boilerplate('html',0,['lang'=>'en'],$content))->get();
}

/**head
 * Esta es la etiqueta 
 * en la cual se escribe
 * todo el codigo 
 * relacionado a la meta informacion
 */
function head($content) {
    return (new Boilerplate('head',0,[],$content))->get();
}