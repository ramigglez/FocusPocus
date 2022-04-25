<?php

/**doctype
 * El doctype es la etiqueta html 
 * que se coloca en primer lugar
 * en cualquier proyecto html
 */
function dt() {
    return (new Bplate('!DOCTYPE',1,['html']))->get();
}