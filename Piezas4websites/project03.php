<?php

require_once './Piezas4websitesClass.php';
require_once './PIEZAS4WEBSITES.php';

page(
    [
        _tag('title','Project 03'),
        kvtag_('link',[
            'rel' => 'icon',
            'type' => 'image/png',
            'href' => './puzzle.png'
        ]),
        kvtag_('link',[
            'rel' => 'stylesheet',
            'type' => 'text/css',
            'href' => './project03.css'
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
                'class' => 'circle-container'
            ],
                kvtag('div',[
                    'class' => 'circle'
                ],[
                    kvtag('button',[
                        'id' => 'close'
                    ],
                        kvtag_('i',[
                            'class' => 'fas fa-times'
                        ])
                    ),
                    kvtag('button',[
                        'id' => 'open'
                    ],
                        kvtag_('i',[
                            'class' => 'fas fa-bars'
                        ])
                    )
                ])
            ),
            kvtag('div',[
                'class' => 'content'
            ],[
                _tag('h1','Amazing Article'),
                _tag('small','Ramiro G'),
                _tag('p','kjfgkljlfjslfklgksfiuwksjbjfdnklgdg
                jsfljslfjlskjflsjklfslkfjlsdf
                slfdjlsdjflsjdlfkjsdlkjflskdjflkdsjlf
                skfjlksdjflsdjlkfjsldjflkdsflkjsdf
                fksdljflsdjflsdjflsjflsdjfljsd
                ;kflhfnfglkglnglkdfhlgmfdcngkhnfg
                lfdsdnflksdhfndnflsdnfldshnjf
                ldfhldsnflksdglskgjjkjfklgjskldfjd
                flkskjdfldjkjskjfdldjflkjflkfdkf'),
                _tag('h3','My Picture'),
                kvtag_('img',[
                    'src' => 'https://images.unsplash.com/photo-1638913976954-8f7b612867c2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80'
                ]),
                _tag('p','jskdjhfkjdshkfjksdf
                jsfldkjslfkjdlksjflkdf
                dslkfjlsdjfldsjklfjslkdjflkdsjlf
                dflkkjdslfjkdlsjflskjdflds
                dsflkdsjflksdjlfsdjlk')
            ])
        ]),
        _tag('nav',_tag('ul',[
            _tag('li',kvtag('i',[
                'class' => 'fas fa-home'
            ],'Home')),
            _tag('li',kvtag('i',[
                'class' => 'fas fa-user-alt'
            ],'About')),
            _tag('li',kvtag('i',[
                'class' => 'fas fa-envelope'
            ],'Contact'))
        ])),
        kvtag_('script',[
            'src' => './project03.js'
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