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

            main_script(),
            fa_script()

        ])

    ])

]))->_get();

focuspocus($genesis);