<?php

require_once './Boilerplate.php';
require_once './BplateFunctions.php';

$genesis = (new Block ([

    dt(),

    html([

        head([

            meta_charset(),
            meta_viewport(),
            title(),
            _link()

        ]),

        body([

            (new Boilerplate('script',0,['src'=>'./Boilerplate.js']))->get(),
            (new Boilerplate('script',0,['src'=>'https://kit.fontawesome.com/e4f1b0b3a6.js','crossorigin'=>'anonymous']))->get()

        ])

    ])

]))->_get();

$genesis =  json_decode($genesis);

$html = explode('  ',$genesis->data);

echo html_entity_decode($html[0]);