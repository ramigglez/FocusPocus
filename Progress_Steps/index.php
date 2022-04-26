<?php

require_once './Boilerplate.php';
require_once './BplateFunctions.php';

page(
    [
        _tag('title','Project 02'),
        kvtag_('link',[
            'rel' => 'icon',
            'type' => 'image/png',
            'href' => './images/puzzle.png'
        ]),
        kvtag_('link',[
            'rel' => 'stylesheet',
            'type' => 'text/css',
            'href' => './Boilerplate.css'
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
                'class' => 'progress-container'
            ],[
                kvtag_('div',[
                    'class' => 'progress',
                    'id' => 'progress'
                ]),
                kvtag('div',[
                    'class' => 'circle active'
                ],'1'),
                kvtag('div',[
                    'class' => 'circle'
                ],'2'),
                kvtag('div',[
                    'class' => 'circle'
                ],'3'),
                kvtag('div',[
                    'class' => 'circle'
                ],'4')
            ]),
            tag('button',[
                'keyval' => [
                    'class' => 'btn',
                    'id' => 'prev'
                ],
                'inline' => ['disabled']
            ],'Prev',false),
            kvtag('button',[
                'class' => 'btn',
                'id' => 'next'
            ],'Next')
        ]),
        kvtag_('script',[
            'src' => './Boilerplate.js'
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