<?php

require_once './Piezas4websitesClass.php';
require_once './PIEZAS4WEBSITES.php';

page(
    [
        _tag('title','Project 01'),
        kvtag_('link',[
            'rel' => 'icon',
            'type' => 'image/png',
            'href' => './puzzle.png'
        ]),
        kvtag_('link',[
            'rel' => 'stylesheet',
            'type' => 'text/css',
            'href' => './project01.css'
        ]),
        kvtag_('link',[
            'href' => 'https://fonts.googleapis.com',
            'rel' => 'preconnect'
        ]),
        kvtag_('link',[
            'href' => 'https://fonts.gstatic.com',
            'rel' => 'preconnect'
        ]),
        kvtag_('link',[
            'href' => 'https://fonts.googleapis.com/css2?family=Rubik+Glitch&display=swap',
            'rel' => 'stylesheet'
        ])
        #otra fuente
        ,
        kvtag_('link',[
            'href' => 'https://fonts.googleapis.com',
            'rel' => 'preconnect'
        ]),
        kvtag_('link',[
            'href' => 'https://fonts.gstatic.com',
            'rel' => 'preconnect'
        ]),
        kvtag_('link',[
            'href' => 'https://fonts.googleapis.com/css2?family=Mukta:wght@600&family=Rubik+Glitch&display=swap',
            'rel' => 'stylesheet'
        ])
    ],
    [
        kvtag('div',[
            'class' => 'container'
        ],[
            kvtag('div',[
                'class' => 'panel active',
                'style' => 'background-image: url("./image01.jpg")'
            ],_tag('h3','Expanding Cards 01')),
            kvtag('div',[
                'class' => 'panel',
                'style' => 'background-image: url("./image02.webp")'
            ],_tag('h3','Expanding Cards 02')),
            kvtag('div',[
                'class' => 'panel',
                'style' => 'background-image: url("./image03.jpg")'
            ],_tag('h3','Expanding Cards 03'))
        ]),
        kvtag_('script',[
            'src' => './project01.js'
        ]),
        tag('script',[
            'keyval' => [
                'src' => 'https://kit.fontawesome.com/e4f1b0b3a6.js'
            ],
            'inline' => [
                'crossorigin' => 'anonymous'
            ]
        ],[],false)
    ]
);