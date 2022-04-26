<?php

require_once './Piezas4websitesClass.php';
require_once './PIEZAS4WEBSITES.php';
/*
    $articles = '';

    for($i = 0; $i < 19; $i++) {
        $articles .= kvtag('article',[
            'class' => 'project',
            'style' => 'margin: 1rem;'
        ],[
            _tag('h2','In Construction'),
            kvtag('p',[
            'id' => 'demo',
            'style' => 'font-size:40px'
            ],'hello world.'),
            kvtag_('img',[
                'src' => './uc.jpeg'
            ]),
            kvtag('a',[
                'href' => 'https://www.youtube.com/channel/UCVa4vtRs15vazMgIZC6SHYw',
                'class' => 'button',
                'target' => 'blank'
            ],'YOUTUBE')
        ]);
    }
*/

page(
    [
        _tag('title','En Construccion'),
        kvtag_('link',[
            'rel' => 'icon',
            'type' => 'image/png',
            'href' => './puzzle.png'
        ]),
        kvtag_('link',[
            'rel' => 'stylesheet',
            'type' => 'text/css',
            'href' => './wrap.css'
        ]),
        kvtag_('link',[
            'rel' => 'stylesheet',
            'type' => 'text/css',
            'href' => './project.css'
        ]),
        kvtag_('link',[
            'rel' => 'stylesheet',
            'type' => 'text/css',
            'href' => './boxShadow.css'
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
        kvtag('header',[
            'class' => 'header',
            'style' => 'width:100%;height:auto;display:flex;justify-content:space-around;align-items:center;padding:30px; background: linear-gradient(-45deg, #EE7752,#006341, #FFFFFF, #CE1126);font-family: "Rubik Glitch", cursive;color:#fff;font-size:35px;text-align:center;'
        ],[
            _tag('h1','Welcome to my Portafolio and cv Underconstruction Professional page.')
        ]),
        '<a href="https://exe.io/ref/ramigglez" id="refer" style="width:100%;display:flex;justify-content:center;align-items:center;padding:20px;"><img src="https://exe.io/img/ref/r1.gif" title="CuT URLs - Earn money by shortening links with the highest CPMs Ever!" /></a>',
            '<div style="width:100%;display:flex;justify-content:center;align-items:center;padding:20px;flex-direction:column;">
                <h2 style="padding:15px;width:100%;text-align:center;font-family: "Rubik Glitch", cursive;">How to get The Link of the project.</h2>
                <video controls />
                    <source src="./getlink.mp4" type="video/mp4">
                </video>
            </div>',
        kvtag('main',[
            'class' => 'wrap'
        ],[
            kvtag('article',[
                'class' => 'project',
                'style' => 'margin: 1rem;'
            ],[
                _tag('h2','In Construction'),
                kvtag_('p',[
                'id' => 'demo',
                'style' => 'font-size:40px'
                ]),
                _tag('p','Welcome to my page. feel free to explore the site.'),
                kvtag_('img',[
                    'src' => './image01.jpg'
                ]),
                kvtag('a',[
                    'href' => 'https://www.youtube.com/channel/UCVa4vtRs15vazMgIZC6SHYw',
                    'class' => 'button',
                    'target' => 'blank'
                ],'YOUTUBE')
            ])/*,
            $articles*/
            ,article('Hello','My name is Ramiro','./image02.webp','https://github.com/ramigglez','GO','PIEZAS 4 WEB SITES'),
            article('project 01','PHP, HTML, CSS, JAVASCRIPT','./image03.jpg','project01.php','VER','Imagenes Expandibles'),
            article('project 02','PHP, HTML, CSS, JAVASCRIPT','./arrow.jpg','project02.php','VER','Steps Progress'),
            article('project 03','PHP, HTML, CSS, JAVASCRIPT','./rotation.png','project03.php','VER','Rotation Nav')
        ]),
        _tag('script',[
            'var countDownDate = new Date("Feb 14, 2023 19:47:25").getTime();',
            'var countdownfunction = setInterval(function() {',
            'var now = new Date().getTime();',
            'var distance = countDownDate - now;',
            'var days = Math.floor(distance / (1000 * 60 * 60 * 24));',
            'var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));',
            'var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));',
            'var seconds = Math.floor((distance % (1000 * 60)) / 1000);',
            'document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";',
            'if (distance < 0) {',
            'clearInterval(countdownfunction);',
            'document.getElementById("demo").innerHTML = "EXPIRED";',
            '}',
            '}, 1000);'
        ])
    ]
);