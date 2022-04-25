<?php

require_once './Boilerplate.php';
require_once './BplateFunctions.php';

$genesis = block([

    dt(),

    html([

        head([

            meta_charset(),
            meta_viewport(),
            title(),
            _link()

        ]),

        body([

            h1(),
            main_script(),
            fa_script()

        ])

    ])

]);

focuspocus($genesis);