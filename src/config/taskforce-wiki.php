<?php

return [

    /**
     * Which type of markup are users allowed to post with.
     * Allowed Values: markdown, html
     */
    'markup' => 'html',

    'html' => [
        /**
         * List of HTML allowed tags
         * if you want to allow youtube video embedding please add 'iframe' to this array.
         */
        'allowed_tags' => [
            'p',
            'h1',
            'h2',
            'h3',
            'h4',
            'i',
            'strong',
            'table',
            'thead',
            'tbody',
            'tr',
            'th',
            'td',
        ]
    ]
];
