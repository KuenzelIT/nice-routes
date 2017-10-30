<?php

return [

    /**
     * The endpoint to access the routes.
     */
    'url' => 'routes',

    /**
     * The methods to hide.
     */
    'hide_methods' => [
        'HEAD',
    ],

    /**
     * Is being used to implode all middlewares. Instead of a line break you may use ', ' or anything else.
     */
    'middlewareSeperator' => '<br>'
];