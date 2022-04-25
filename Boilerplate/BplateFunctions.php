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

/**body
 * El cuerpo es la etiqueta
 * que se encarga de 
 * agrupar todos los 
 * elementos html que
 * conforman a la estructura
 * de la pagina web
 */
function body($content) {
    return (new Boilerplate('body',0,[],$content))->get();
}

/**meta 
 * Esta etiqueta nos sirve
 * para agregar meta informacion
 * en el head del documento
*/
function meta_charset() {
    return (new Bplate('meta',0,['charset'=>'UTF-8']))->get();
}

function meta_viewport() {
    return (new Bplate('meta',0,[
        'name'=>'viewport',
        'content'=>'width=device-width, initial-scale=1.0'
    ]))->get();
}

/**title
 * El titulo nos
 * sirve para agregar 
 * el texto que querramos 
 * al tab del navegador
 */
function title () {
    return (new Boilerplate('title',0,[],'My Project'))->get();
}

/**_link 
 * Con esta etiqueta 
 * podemos vincular archivos css
 * en el head del documento
*/
function _link() {
    return (new Bplate('link',0,['rel'=>'stylesheet','href'=>'./Boilerplate.css']))->get();
}