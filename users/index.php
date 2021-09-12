<?php

function run()
{
    return [
        'requestUri' =>  $_SERVER['REQUEST_URI'],
        'data' => [
            [
                'id' => 1,
                'name' => 'Christian',
                'surname' => 'Dominguez',
            ],
            [
                'id' => 2,
                'name' => 'Delores',
                'surname' => 'Ellis',
            ],
            [
                'id' => 3,
                'name' => 'Hope',
                'surname' => 'Shannon',
            ],
            [
                'id' => 4,
                'name' => 'Dale',
                'surname' => 'Brewer',
            ],
            [
                'id' => 5,
                'name' => 'Rosario',
                'surname' => 'Sargent',
            ],
        ]
    ];
}
