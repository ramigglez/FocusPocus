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
    return (new Boilerplate('title',0,[],'My Project 01'))->get();
}

/**_link 
 * Con esta etiqueta 
 * podemos vincular archivos css
 * en el head del documento
*/
function _link() {
    return (new Bplate('link',0,['rel'=>'stylesheet','href'=>'./Boilerplate.css']))->get();
}

/**script
 * La etiqueta 
 * script nos
 * permite agregar codigo
 * javascript a el documento
 */
function main_script() {
    return (new Boilerplate('script',0,['src'=>'./Boilerplate.js']))->get();
}

function fa_script() {
    return (new Boilerplate('script',0,['src'=>'https://kit.fontawesome.com/e4f1b0b3a6.js','crossorigin'=>'anonymous']))->get();
}

/**focuspocus
 * Esta funcion
 * nos muestra el 
 * resultado por pantalla
 */
function focuspocus($genesis) {
    $genesis =  json_decode($genesis);

    $html = explode('  ',$genesis->data);

    echo html_entity_decode($html[0]);
}

/**block
 * Esta funcion 
 * nos encapsula el 
 * codigo html en un 
 * bloque con su hash
 */
function block($data) {
    return (new Block ($data))->_get();
}

/**h1
 * Esta etiqueta es 
 * el encabezado 
 * mas grande
 */
function h1() {
    return (new Boilerplate('h1',0,[],'Expandibles Images Project 01/50'))->get();
}