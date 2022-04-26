<?php

require_once './Boilerplate.php';
require_once './BplateFunctions.php';

$genesis = block([

    dt(),

    html([

        head([

            meta_charset(),
            meta_viewport(),
            title('My project 02'),
            _link(),
            fonts()

        ]),

        body([

            screens(),
            main_script(),
            fa_script()

        ])

    ])

]);

focuspocus($genesis,0);