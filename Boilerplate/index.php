<?php

require_once './Boilerplate.php';

$genesis = (new Block ([

    (new Bplate('!DOCTYPE',1,['html']))->get(),

    (new Boilerplate('html',0,['lang'=>'en'],[

        (new Boilerplate('head',0,[],[

            (new Bplate('meta',0,['charset'=>'UTF-8']))->get(),
            (new Bplate('meta',0,[
                'name'=>'viewport',
                'content'=>'width=device-width, initial-scale=1.0'
            ]))->get(),
            (new Boilerplate('title',0,[],'My Project'))->get(),
            (new Bplate('link',0,['rel'=>'stylesheet','href'=>'./Boilerplate.css']))->get()

        ]))->get(),

        (new Boilerplate('body',0,[],[

            (new Boilerplate('script',0,['src'=>'./Boilerplate.js']))->get(),
            (new Boilerplate('script',0,['src'=>'https://kit.fontawesome.com/e4f1b0b3a6.js','crossorigin'=>'anonymous']))->get()

        ]))->get()

    ]))->get()

]))->_get();

$genesis =  json_decode($genesis);

$html = explode('  ',$genesis->data);

echo html_entity_decode($html[0]);